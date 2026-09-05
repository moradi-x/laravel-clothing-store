<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use App\Models\ProductVariation;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // عکس تست
        $images = [
            'image.jpg',
        ];

        // دسته‌بندی‌های نهایی محصولات
        $categories = Category::whereIn('slug', [
            'men-clothes',
            'men-shirt',
            'women-clothes',
            'manto',
        ])->get();

        // ویژگی‌ها
        $attributes = Attribute::whereIn('name', [
            'رنگ',
            'سایز',
            'جنس',
            'طرح',
            'آستین',
            'فصل',
        ])->get()->keyBy('name');

        // مقادیر ویژگی‌ها
        $attributeValues = [
            'جنس' => [
                'نخی',
                'پنبه‌ای',
                'جین',
                'کتان',
                'پلی‌استر',
            ],

            'طرح' => [
                'ساده',
                'راه‌راه',
                'چهارخانه',
                'چاپی',
            ],

            'آستین' => [
                'کوتاه',
                'بلند',
                'سه‌ربع',
            ],

            'فصل' => [
                'بهار',
                'تابستان',
                'پاییز',
                'زمستان',
            ],
        ];

        // نام محصولات
        $productNames = [
            'پیراهن مردانه کلاسیک',
            'تی‌شرت مردانه ساده',
            'شلوار جین مردانه',
            'هودی مردانه اسپرت',
            'پیراهن مردانه چهارخانه',
            'شومیز زنانه',
            'مانتو زنانه کلاسیک',
            'مانتو زنانه اسپرت',
            'شلوار جین زنانه',
            'تی‌شرت زنانه ساده',
            'پیراهن زنانه مجلسی',
            'کت زنانه پاییزه',
            'هودی زنانه اسپرت',
            'شلوار زنانه کتان',
            'پیراهن زنانه تابستانی',
            'تی‌شرت مردانه چاپی',
            'شلوار مردانه کتان',
            'مانتو زنانه تابستانی',
            'پیراهن مردانه نخی',
            'سویشرت زنانه اسپرت',
        ];

        foreach ($productNames as $name) {

            // برند تصادفی
            $brand = Brand::inRandomOrder()->first();

            // دسته‌بندی تصادفی
            $category = $categories->random();

            // قیمت تصادفی
            $price = rand(800, 3500) * 1000;

            // عکس اصلی
            $primaryImage = $images[array_rand($images)];

            // ایجاد محصول
            $product = Product::create([
                'name' => $name,
                'slug' => Str::slug($name) . '-' . Str::random(5),
                'brand_id' => $brand->id,
                'category_id' => $category->id,
                'primary_image' => $primaryImage,
                'description' => 'این محصول با کیفیت مناسب و طراحی زیبا برای استفاده روزمره تولید شده است.',
                'status' => 1,
                'is_active' => 1,
                'delivery_amount' => rand(30, 100) * 1000,
                'delivery_amount_per_product' => rand(0, 50) * 1000,
            ]);

            // --------------------------------
            // تصاویر محصول
            // --------------------------------

            // چون فعلاً یک عکس داریم،
            // همان عکس برای محصول استفاده می‌شود.
            ProductImage::create([
                'product_id' => $product->id,
                'image' => $primaryImage,
            ]);

            // --------------------------------
            // ویژگی‌های معمولی محصول
            // --------------------------------

            $normalAttributes = [
                'جنس',
                'طرح',
                'آستین',
                'فصل',
            ];

            // انتخاب 2 تا 4 ویژگی تصادفی
            $selectedAttributes = collect($normalAttributes)
                ->shuffle()
                ->take(rand(2, 4));

            foreach ($selectedAttributes as $attributeName) {

                $attribute = $attributes[$attributeName] ?? null;

                if (!$attribute) {
                    continue;
                }

                ProductAttribute::create([
                    'product_id' => $product->id,
                    'attribute_id' => $attribute->id,
                    'value' => fake()->randomElement(
                        $attributeValues[$attributeName]
                    ),
                    'is_active' => 1,
                ]);
            }

            // --------------------------------
            // Variation
            // --------------------------------

            // فقط رنگ یا سایز
            $variationAttributeName = fake()->randomElement([
                'رنگ',
                'سایز',
            ]);

            $variationAttribute = $attributes[$variationAttributeName];

            if ($variationAttributeName === 'رنگ') {

                $variationValues = [
                    'مشکی',
                    'سفید',
                    'آبی',
                    'قرمز',
                    'سبز',
                ];

            } else {

                $variationValues = [
                    'S',
                    'M',
                    'L',
                    'XL',
                    'XXL',
                ];
            }

            // انتخاب 2 تا 4 مقدار متفاوت
            $selectedVariations = collect($variationValues)
                ->shuffle()
                ->take(rand(2, 4));

            foreach ($selectedVariations as $value) {

                ProductVariation::create([
                    'attribute_id' => $variationAttribute->id,
                    'product_id' => $product->id,
                    'value' => $value,
                    'price' => $price,
                    'quantity' => rand(5, 50),
                    'sku' => strtoupper(Str::random(8)),
                    'sale_price' => null,
                    'date_on_sale_from' => null,
                    'date_on_sale_to' => null,
                ]);
            }

            // --------------------------------
            // تگ‌های تصادفی
            // --------------------------------

            $tagIds = Tag::inRandomOrder()
                ->take(rand(1, 3))
                ->pluck('id')
                ->toArray();

            $product->tags()->attach($tagIds);
        }
    }
}
