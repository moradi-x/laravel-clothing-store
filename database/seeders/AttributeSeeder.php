<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run(): void
    {
        $attributes = [
            'رنگ',
            'سایز',
            'جنس',
            'طرح',
            'آستین',
            'فصل',
        ];

        foreach ($attributes as $attribute) {
            Attribute::create([
                'name' => $attribute,
            ]);
        }
    }
}

