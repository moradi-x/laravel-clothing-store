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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id ')->references('id')->on('users')->onDelete('cascade');

            $table->foreignId('order_id')->nullable();
            $table->foreign('order_id ')->references('id')->on('orders')->onDelete('cascade');

            $table->unsignedInteger('amount');
            $table->string('ref_id')->nullable();
            $table->string('token')->nullable();
            $table->text('descrption')->nullable();
            $table->enum('gateway_name',['zarinpal','pay']);
            $table->tinyInteger('status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
