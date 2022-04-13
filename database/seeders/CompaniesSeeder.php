<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create(['name'=>'Empresa A']);
        Company::create(['name'=>'Empresa B']);
        Company::create(['name'=>'Empresa C']);
        Company::factory()->count(50)->create();

    }
}
