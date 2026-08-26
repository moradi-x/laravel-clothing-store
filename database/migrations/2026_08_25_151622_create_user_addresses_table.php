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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title');
            $table->string(column: 'address');
            // $table->string(column: 'cellphone');
             $table->string(column: 'postal_code');

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('province_id'); // چون ایمپورت میکنیم اینارو
            $table->bigInteger('city_id');

            $table->string('longitude')->nullable();
            $table->string('lantitude')->nullable();
            



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
