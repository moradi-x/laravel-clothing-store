<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // دسته اصلی پوشاک
        $clothing = Category::create([
            'parent_id' => 0,
            'name' => 'پوشاک',
            'slug' => 'clothing',
            'description' => 'انواع پوشاک مردانه و زنانه',
            'is_active' => 1,
            'icon' => 'fa-shirt',
        ]);

        // پوشاک مردانه
        $men = Category::create([
            'parent_id' => $clothing->id,
            'name' => 'مردانه',
            'slug' => 'men',
            'description' => 'انواع پوشاک مردانه',
            'is_active' => 1,
            'icon' => 'fa-person',
        ]);

        // پوشاک زنانه
        $women = Category::create([
            'parent_id' => $clothing->id,
            'name' => 'زنانه',
            'slug' => 'women',
            'description' => 'انواع پوشاک زنانه',
            'is_active' => 1,
            'icon' => 'fa-person-dress',
        ]);

        // لباس مردانه
        Category::create([
            'parent_id' => $men->id,
            'name' => 'لباس مردانه',
            'slug' => 'men-clothes',
            'description' => 'انواع لباس مردانه',
            'is_active' => 1,
            'icon' => 'fa-shirt',
        ]);

        // پیراهن مردانه
        Category::create([
            'parent_id' => $men->id,
            'name' => 'پیراهن مردانه',
            'slug' => 'men-shirt',
            'description' => 'انواع پیراهن مردانه',
            'is_active' => 1,
            'icon' => 'fa-shirt',
        ]);

        // لباس زنانه
        Category::create([
            'parent_id' => $women->id,
            'name' => 'لباس زنانه',
            'slug' => 'women-clothes',
            'description' => 'انواع لباس زنانه',
            'is_active' => 1,
            'icon' => 'fa-shirt',
        ]);

        // مانتو
        Category::create([
            'parent_id' => $women->id,
            'name' => 'مانتو',
            'slug' => 'manto',
            'description' => 'انواع مانتو زنانه',
            'is_active' => 1,
            'icon' => 'fa-shirt',
        ]);
    }
}
