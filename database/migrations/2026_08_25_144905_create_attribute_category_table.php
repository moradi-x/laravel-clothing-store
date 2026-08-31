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
        Schema::create('attribute_category', function (Blueprint $table) {

             $table->foreignId('attribute_id');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');

             $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->boolean('is_filter')->default(0);
            $table->boolean('is_variation')->default(0);

            // $table->primary(['category_id','is_filter']);
            $table->primary(['category_id','attribute_id']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_category');
    }
};
