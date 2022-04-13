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
        // \App\Models\User::factory(10)->create();
        $this->call(CompaniesSeeder::class);
        $this->call(DepartmentsSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(ContractsSeeder::class);
        $this->call(StatesAndCitiesSeeder::class);


    }
}
