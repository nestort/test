<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contract;
use App\Models\Employee;

class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Contract::create(
            [
                'begin'=>now()->subYears(2),
                'description'=>'Contrato por honorarios',
                'employee_id'=>1,
                'company_id'=>1,
                'department_id'=>1,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(1.5),
                'description'=>'Contrato por honorarios',
                'employee_id'=>2,
                'company_id'=>1,
                'department_id'=>1,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(4),
                'description'=>'Contrato por honorarios',
                'employee_id'=>3,
                'company_id'=>1,
                'department_id'=>1,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(3),
                'description'=>'Contrato por honorarios',
                'employee_id'=>4,
                'company_id'=>2,
                'department_id'=>1,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(1),
                'description'=>'Contrato por honorarios',
                'employee_id'=>5,
                'company_id'=>2,
                'department_id'=>1,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(1.5),
                'description'=>'Contrato por honorarios',
                'employee_id'=>6,
                'company_id'=>3,
                'department_id'=>4,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(1),
                'description'=>'Contrato por honorarios',
                'employee_id'=>7,
                'company_id'=>3,
                'department_id'=>4,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(1),
                'description'=>'Contrato por honorarios',
                'employee_id'=>8,
                'company_id'=>2,
                'department_id'=>4,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(1),
                'description'=>'Contrato por honorarios',
                'employee_id'=>9,
                'company_id'=>2,
                'department_id'=>4,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(6),
                'description'=>'Contrato por honorarios',
                'employee_id'=>10,
                'company_id'=>2,
                'department_id'=>3,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(4.5),
                'description'=>'Contrato por honorarios',
                'employee_id'=>11,
                'company_id'=>2,
                'department_id'=>3,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(0.5),
                'description'=>'Contrato por honorarios',
                'employee_id'=>12,
                'company_id'=>3,
                'department_id'=>5,
            ]
        );
        Contract::create(
            [
                'begin'=>now()->subYears(4),
                'description'=>'Contrato por honorarios',
                'employee_id'=>13,
                'company_id'=>3,
                'department_id'=>5,
            ]
        );
        //Contract::factory()->count(50)->create();


    }

}
