<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Carbon\Carbon;




class EmployeesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Employee::create(
            [
            'first_name'=>'Ana',
            'last_name'=>'Yam',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Daniel',
            'last_name'=>'Alonzo',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Juan',
            'last_name'=>'Chan',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Cesar',
            'last_name'=>'Castellanos',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Antonio',
            'last_name'=>'Hau',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Francisco',
            'last_name'=>'Silvente',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Omar',
            'last_name'=>'Canto',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Felipe',
            'last_name'=>'Pacheco',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Antonio',
            'last_name'=>'Sanchez',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Erika',
            'last_name'=>'Medina',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Jorge',
            'last_name'=>'Campos',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'Jaqueline',
            'last_name'=>'Pech',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);
            Employee::create(
            [
            'first_name'=>'José',
            'last_name'=>'Medina',
            'date_birth'=> Carbon::now()->subYear(rand($min=14, $max=50))
            ]);



        // Employee::factory()->count(2)->create();

    }
}
