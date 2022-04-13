<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['name' => 'RH']);
        Department::create(['name' => 'CONTABILIDAD']);
        Department::create(['name' => 'OPERACIONES']);
        Department::create(['name' => 'VENTAS']);
        Department::create(['name' => 'ALMACEN']);
    }

}
