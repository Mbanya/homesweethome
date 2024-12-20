<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'image' => 'array',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($property) {
            $slug = Str::slug($property->title);
            $count = 1;

            while (static::where('slug', $slug)->exists()) {
                $slug = Str::slug($property->title) . '-' . $count;
                $count++;
            }

            $property->slug = $slug;
        });
    }


    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function sale_type(): BelongsTo
    {
        return $this->belongsTo(SaleType::class);
    }


    public function house_type(): BelongsTo
    {
        return $this->belongsTo(HouseType::class);
    }

    /**
     * @return string
     */
    public function getSlugAttribute(): string
    {
        return Str::slug($this->title);
    }
}
