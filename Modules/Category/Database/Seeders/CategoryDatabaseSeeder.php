<?php

namespace Modules\Category\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        \Modules\Category\Entities\Category::create([

            'name' =>'Productos Generales',
            'image'=>'https://dummyimage.com/200x150/5c5756/fff'
        ]);
    }
}
