<?php

namespace Modules\Company\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Company\Entities\Company;

class CompanyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        $empresa = new Company();
        $empresa->name = 'DEVTECHVE';
        $empresa->address = 'Caracas - Venezuela';
        $empresa->phone = '04241703465';
        $empresa->taxpayer = '16';

        $empresa->save();


        $user = new \App\Models\User();
        $user->name              = 'Theizer Gonzalez';
        $user->username          = 'tgonzalez';
        $user->empresa_id        = 1;
        $user->email             = 'admin@mail.com';
        $user->email_verified_at = date('Y-m-d H:i:s') ;
        $user->password          = bcrypt('admin123');
        $user->status            = 1;
        $user->role_id           = 1;
        $user->created_at        = date('Y-m-d H:m:s');
        $user->save();


        $user->assignRole('Administrador');
    }
}
