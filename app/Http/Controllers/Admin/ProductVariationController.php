<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductVariation;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;

class ProductVariationController extends Controller
{
    public function store($variations, $attributeId, $product)
    {


        $caunter = count($variations['value']);

        for ($i = 0; $i < $caunter; $i++) {
            ProductVariation::create([
                'attribute_id' => $attributeId,
                'product_id' => $product->id,
                'value' => $variations['value'][$i],
                'price' => $variations['price'][$i],
                'quantity' => $variations['quantity'][$i],
                'sku' => $variations['sku'][$i]

            ]);
        }
    }

    public function update($variationIds)
    {
        foreach ($variationIds as $key => $value) {
            $productVariationIds = ProductVariation::findOrFail($key);
            $productVariationIds->update([
                'price' => $value['price'],
                'quantity' => $value['quantity'],
                'sku' => $value['sku'],
                'sale_price' => $value['sale_price'],

                
                'date_on_sale_from' => !empty($value['date_on_sale_from'])
                    ? Verta::parseFormat(
                        'Y/m/d H:i:s',
                        str_replace('-', '/', $value['date_on_sale_from'])
                    )->formatGregorian('Y-m-d H:i:s')
                    : null,

                'date_on_sale_to' => !empty($value['date_on_sale_to'])
                    ? Verta::parseFormat(
                        'Y/m/d H:i:s',
                        str_replace('-', '/', $value['date_on_sale_to'])
                    )->formatGregorian('Y-m-d H:i:s')
                    : null,
            ]);
        }
    }
}
