<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tags')->insert([
            [
                'name' => 'جدید',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'پرفروش',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'تخفیف ویژه',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'محدود',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'پیشنهاد ویژه',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'تابستانی',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}