<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         \Modules\Product\Entities\Product::create([
            'name'         => 'ZAPATO NIKE',
            'cost'         => 300.50,
            'price'        => 250.50,
            'barcode'      => '42010065987',
            'stock'        => 1000,
            'alerts'       => 100,
            'category_id'  => 1,
            'image'        => 'product.png'
         ]);

          \Modules\Product\Entities\Product::create([
            'name'         => 'IPHONE 11',
            'cost'         => 1200.50,
            'price'        => 1450.50,
            'barcode'      => '45010065987',
            'stock'        => 1000,
            'alerts'       => 100,
            'category_id'  => 1,
            'image'        => 'product.png'
         ]);

          \Modules\Product\Entities\Product::create([
            'name'         => 'PSP 4885',
            'cost'         => 150.50,
            'price'        => 450.50,
            'barcode'      => '41010065987',
            'stock'        => 1000,
            'alerts'       => 100,
            'category_id'  => 1,
            'image'        => 'product.png'
        ]);

          \Modules\Product\Entities\Product::create([
            'name'         => 'PLAYSTATION 5',
            'cost'         => 1500.50,
            'price'        => 1650.50,
            'barcode'      => '41710065987',
            'stock'        => 1000,
            'alerts'       => 100,
            'category_id'  => 1,
            'image'        => 'product.png'
        ]);
    }
}
