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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'image');
            $table->string(column: 'title')->nullable();
            $table->string(column: 'text')->nullable();
            $table->string(column: 'priority')->nullable();
            $table->boolean(column: 'is_active')->default(1);
            $table->string(column: 'type');
            $table->string(column: 'button_text')->nullable();
            $table->string(column: 'button_link')->nullable();
            $table->string(column: 'button_icon')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
