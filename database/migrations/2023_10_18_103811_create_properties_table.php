<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('details');
            $table->string('price');
            $table->foreignIdFor(\App\Models\HouseType::class);
            $table->foreignIdFor(\App\Models\SaleType::class);
            $table->foreignIdFor(\App\Models\City::class);
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            $table->string('number_of_beds');
            $table->string('number_of_baths');
            $table->string('property_size')->nullable();
            $table->boolean('pets_allowed')->default(0);
            $table->boolean('dishwasher')->default(0);
            $table->boolean('furnished')->default(0);
            $table->string('image');
            $table->boolean('featured')->default(0);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
