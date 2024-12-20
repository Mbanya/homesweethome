<?php

namespace App\Console\Commands;

use App\Models\Property;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GeneratePropertySlugs extends Command
{
    protected $signature = 'properties:generate-slugs';
    protected $description = 'Generate slugs for properties based on their titles';

    public function handle(): void
    {
        $properties = Property::whereNull('slug')->orWhere('slug', '')->get();

        $count = 0;
        foreach ($properties as $property) {
            $slug = Str::slug($property->title);

            // Check for duplicates and append a number if necessary
            $originalSlug = $slug;
            $counter = 1;

            while (Property::where('slug', $slug)
                ->where('id', '!=', $property->id)
                ->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            $property->slug = $slug;
            $property->save();
            $count++;
        }

        $this->info("Updated slugs for {$count} properties.");
    }
}
