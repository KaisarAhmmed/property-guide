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
            $table->string('name');
            $table->string('featured_image');
            $table->unsignedBigInteger('location_id');

            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('sale')->default(1)->comment('0=rent,1=sale');
            $table->unsignedBigInteger('type')->default(1)->comment('0=land,1=apartment,2=villa');
            $table->unsignedBigInteger('bedrooms')->nullable();
            $table->unsignedBigInteger('bathrooms')->nullable();
            $table->unsignedBigInteger('net_sqm')->nullable();
            $table->unsignedBigInteger('gross_sqm')->nullable();
            $table->longText('overview');
            $table->longText('why_buy')->nullable();
            $table->unsignedBigInteger('pool')->nullable()->comment('0=no,1=private,2=public,3=both');
            $table->timestamps();

            $table->longText('description');

            //$table->foreign('featured_meida_id')->references('id')->on('media');
            $table->foreign('location_id')->references('id')->on('locations');
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
