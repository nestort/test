<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\City;

class StatesAndCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url="https://raw.githubusercontent.com/martinciscap/json-estados-municipios-mexico/master/estados-municipios.json";
        $json_file = file_get_contents($url);
        $json_data = json_decode($json_file, true);
        $states = array_keys($json_data, true);
        foreach ($states as  $state) {
            $state_saved = State::create(['name' => strtoupper($state)]);
            $cities = $json_data[$state];
            foreach ($cities as  $city) {
                City::create(['name' => strtoupper($city),'state_id'=>$state_saved->id]);
            }
        }
    }
}
