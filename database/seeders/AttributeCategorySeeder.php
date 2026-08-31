<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeCategorySeeder extends Seeder
{
    public function run(): void
    {
        // پاک کردن ارتباط‌های قبلی
        DB::table('attribute_category')->truncate();

        // دریافت دسته‌بندی‌ها
        $clothing = Category::where('slug', 'clothing')->first();
        $men = Category::where('slug', 'men')->first();
        $women = Category::where('slug', 'women')->first();
        $menClothes = Category::where('slug', 'men-clothes')->first();
        $menShirt = Category::where('slug', 'men-shirt')->first();
        $womenClothes = Category::where('slug', 'women-clothes')->first();
        $manto = Category::where('slug', 'manto')->first();

        // دریافت ویژگی‌ها
        $color = Attribute::where('name', 'رنگ')->first();
        $size = Attribute::where('name', 'سایز')->first();
        $material = Attribute::where('name', 'جنس')->first();
        $design = Attribute::where('name', 'طرح')->first();
        $sleeve = Attribute::where('name', 'آستین')->first();
        $season = Attribute::where('name', 'فصل')->first();

        /*
        |--------------------------------------------------------------------------
        | ویژگی‌های عمومی پوشاک
        |--------------------------------------------------------------------------
        */

        $this->attachAttributes(
            $clothing,
            [
                $color,
                $size,
                $material,
                $design,
                $season,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | مردانه
        |--------------------------------------------------------------------------
        */

        $this->attachAttributes(
            $men,
            [
                $color,
                $size,
                $material,
                $design,
                $season,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | لباس مردانه
        |--------------------------------------------------------------------------
        */

        $this->attachAttributes(
            $menClothes,
            [
                $color,
                $size,
                $material,
                $design,
                $sleeve,
                $season,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | پیراهن مردانه
        |--------------------------------------------------------------------------
        */

        $this->attachAttributes(
            $menShirt,
            [
                $color,
                $size,
                $material,
                $design,
                $sleeve,
                $season,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | زنانه
        |--------------------------------------------------------------------------
        */

        $this->attachAttributes(
            $women,
            [
                $color,
                $size,
                $material,
                $design,
                $season,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | لباس زنانه
        |--------------------------------------------------------------------------
        */

        $this->attachAttributes(
            $womenClothes,
            [
                $color,
                $size,
                $material,
                $design,
                $sleeve,
                $season,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | مانتو
        |--------------------------------------------------------------------------
        */

        $this->attachAttributes(
            $manto,
            [
                $color,
                $size,
                $material,
                $design,
                $sleeve,
                $season,
            ]
        );
    }

    /**
     * اتصال ویژگی‌ها به دسته‌بندی
     */
    private function attachAttributes($category, array $attributes): void
    {
        foreach ($attributes as $attribute) {

            // رنگ و سایز = ویژگی متغیر
            $isVariation = in_array($attribute->name, [
                'رنگ',
                'سایز',
            ]) ? 1 : 0;

            DB::table('attribute_category')->insert([
                'attribute_id' => $attribute->id,
                'category_id' => $category->id,
                'is_filter' => 1,
                'is_variation' => $isVariation,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
