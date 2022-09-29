<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
     /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(\Modules\Roles\Database\Seeders\RolesAndPermissionsTableSeeder::class);
         //$this->call(\Modules\Usuarios\Database\Seeders\UsuariosTableSeeder::class);
         $this->call(\Modules\Company\Database\Seeders\CompanyDatabaseSeeder::class);
         $this->call(\Modules\Category\Database\Seeders\CategoryDatabaseSeeder::class);
         $this->call(\Modules\Denomination\Database\Seeders\DenominationDatabaseSeeder::class);
         $this->call(\Modules\Product\Database\Seeders\ProductDatabaseSeeder::class);

    }
}
