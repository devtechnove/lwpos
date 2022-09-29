<?php

namespace Modules\Denomination\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DenominationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        \Modules\Denomination\Entities\Denomination::create([
            'type' =>'BILLETE',
            'value'=>100
        ]);

        \Modules\Denomination\Entities\Denomination::create([
            'type' =>'BILLETE',
            'value'=>50
        ]);

        \Modules\Denomination\Entities\Denomination::create([
            'type' =>'BILLETE',
            'value'=>20
        ]);

        \Modules\Denomination\Entities\Denomination::create([
            'type' =>'BILLETE',
            'value'=>10
        ]);

        \Modules\Denomination\Entities\Denomination::create([
            'type' =>'BILLETE',
            'value'=>5
        ]);

        \Modules\Denomination\Entities\Denomination::create([
            'type' =>'MONEDA',
            'value'=>0.50
        ]);

        \Modules\Denomination\Entities\Denomination::create([
            'type' =>'MONEDA',
            'value'=>1.00
        ]);
    }
}
