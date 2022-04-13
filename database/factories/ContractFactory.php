<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'begin'=>$this->faker->dateTimeBetween($startDate = '-15 years', $endDate = 'now'),
            'description'=>$this->faker->realText($this->faker->numberBetween(10, 20)),
            'employee_id'=>Employee::pluck('id')[$this->faker->numberBetween(1,Employee::count()-1)],
            'company_id'=>Company::pluck('id')[$this->faker->numberBetween(1,Company::count()-1)],
            'department_id'=>Department::pluck('id')[$this->faker->numberBetween(1,Department::count()-1)],
        ];
    }
}
