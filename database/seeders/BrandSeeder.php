<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Nike',
                'slug' => 'nike',
                'is_active' => 1,
            ],
            [
                'name' => 'Adidas',
                'slug' => 'adidas',
                'is_active' => 1,
            ],
            [
                'name' => 'Puma',
                'slug' => 'puma',
                'is_active' => 1,
            ],
            [
                'name' => 'Zara',
                'slug' => 'zara',
                'is_active' => 1,
            ],
            [
                'name' => 'H&M',
                'slug' => 'hm',
                'is_active' => 1,
            ],
            [
                'name' => 'Levi’s',
                'slug' => 'levis',
                'is_active' => 1,
            ],
            [
                'name' => 'Gucci',
                'slug' => 'gucci',
                'is_active' => 1,
            ],
            [
                'name' => 'Tommy Hilfiger',
                'slug' => 'tommy-hilfiger',
                'is_active' => 1,
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}

