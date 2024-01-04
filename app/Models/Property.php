<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];


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
}
