<?php

declare(strict_types=1);

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Http\UploadedFile;

final class SafeFile implements ValidationRule
{
    /**
     * @param array<string> $allowedMimeTypes
     */
    public function __construct(
        private readonly array $allowedMimeTypes = []
    ) {
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Handle array of files (multiple uploads)
        if (is_array($value)) {
            foreach ($value as $file) {
                if ($file instanceof UploadedFile) {
                    $this->validateFile($file, $attribute, $fail);
                }
            }

            return;
        }

        // Handle single file
        if ($value instanceof UploadedFile) {
            $this->validateFile($value, $attribute, $fail);
        }
    }

    private function validateFile(UploadedFile $file, string $attribute, Closure $fail): void
    {
        $filename = $file->getClientOriginalName();
        $path = $file->getRealPath();

        // 1. Check for double extensions (e.g., image.php.jpg)
        if ($this->hasDoubleExtension($filename)) {
            $fail('The :attribute contains an invalid file extension.');
        }

        // 2. Validate MIME type using finfo (more reliable than client-reported MIME)
        $detectedMime = $this->getFileMimeType($path);
        if ($detectedMime === null) {
            $fail('The :attribute could not be validated. The file may be corrupted.');
        }

        // 3. Check if detected MIME matches allowed types
        if (! empty($this->allowedMimeTypes) && ! in_array($detectedMime, $this->allowedMimeTypes, true)) {
            $fail('The :attribute must be a valid image file (JPEG, PNG, WebP, or GIF).');
        }

        // 4. Validate magic bytes (file header) for image files
        if (! $this->hasValidImageMagicBytes($path, $detectedMime)) {
            $fail('The :attribute file header does not match the file type. The file may be corrupted or malicious.');
        }

        // 5. For image files, verify using getimagesize() to ensure it's a valid image
        if (str_starts_with($detectedMime, 'image/')) {
            $imageInfo = @getimagesize($path);
            if ($imageInfo === false) {
                $fail('The :attribute is not a valid image file.');
            }
        }

        // 6. Check for embedded PHP code in file content
        if ($this->containsPhpCode($path)) {
            $fail('The :attribute contains potentially malicious content.');
        }
    }

    /**
     * Check if filename has double extension (e.g., file.php.jpg)
     */
    private function hasDoubleExtension(string $filename): bool
    {
        $dangerousExtensions = ['php', 'php3', 'php4', 'php5', 'phtml', 'phar', 'exe', 'bat', 'cmd', 'com', 'pif', 'scr', 'vbs', 'js', 'jsp', 'asp', 'aspx', 'sh', 'cgi', 'pl', 'py', 'rb', 'jar', 'war'];
        $parts = explode('.', strtolower($filename));

        if (count($parts) < 2) {
            return false;
        }

        // Check if any part before the last extension is a dangerous extension
        for ($i = 0; $i < count($parts) - 1; $i++) {
            if (in_array($parts[$i], $dangerousExtensions, true)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get MIME type using finfo_file (more reliable than client-reported)
     */
    private function getFileMimeType(string $path): ?string
    {
        if (! file_exists($path) || ! is_readable($path)) {
            return null;
        }

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        if ($finfo === false) {
            return null;
        }

        $mimeType = finfo_file($finfo, $path);
        finfo_close($finfo);

        return $mimeType ?: null;
    }

    /**
     * Validate magic bytes (file header) match expected image formats
     */
    private function hasValidImageMagicBytes(string $path, string $mimeType): bool
    {
        if (! file_exists($path) || ! is_readable($path)) {
            return false;
        }

        $handle = @fopen($path, 'rb');
        if ($handle === false) {
            return false;
        }

        $header = fread($handle, 12);
        fclose($handle);

        if ($header === false || strlen($header) < 4) {
            return false;
        }

        // Check magic bytes for common image formats
        return match ($mimeType) {
            'image/jpeg' => substr($header, 0, 3) === "\xFF\xD8\xFF",
            'image/png' => substr($header, 0, 8) === "\x89\x50\x4E\x47\x0D\x0A\x1A\x0A",
            'image/gif' => substr($header, 0, 6) === "\x47\x49\x46\x38\x39\x61" || substr($header, 0, 6) === "\x47\x49\x46\x38\x37\x61",
            'image/webp' => substr($header, 0, 4) === "\x52\x49\x46\x46" && substr($header, 8, 4) === "\x57\x45\x42\x50",
            default => true, // Allow other MIME types if not in our list
        };
    }

    /**
     * Check if file contains PHP code (even if disguised as image)
     */
    private function containsPhpCode(string $path): bool
    {
        if (! file_exists($path) || ! is_readable($path)) {
            return false;
        }

        $content = @file_get_contents($path);
        if ($content === false) {
            return false;
        }

        // Check for PHP opening tags
        $phpPatterns = [
            '/<\?php/i',
            '/<\?=/i',
            '/<\?/i',
            '/<script[^>]*>.*?<\/script>/is',
            '/eval\s*\(/i',
            '/base64_decode/i',
            '/exec\s*\(/i',
            '/system\s*\(/i',
            '/shell_exec\s*\(/i',
            '/passthru\s*\(/i',
        ];

        foreach ($phpPatterns as $pattern) {
            if (preg_match($pattern, $content)) {
                return true;
            }
        }

        return false;
    }
}
