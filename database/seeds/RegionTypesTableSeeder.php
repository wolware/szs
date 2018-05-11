<?php

use App\RegionType;
use Illuminate\Database\Seeder;

class RegionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Adding region types
        $region_types = [
            [
                'type' => 'Continent',
                'level' => 0
            ],
            [
                'type' => 'Country',
                'level' => 1
            ],
            [
                'type' => 'Province',
                'level' => 2
            ],
            [
                'type' => 'Region',
                'level' => 3
            ],
            [
                'type' => 'Municipality',
                'level' => 4
            ]
        ];

        RegionType::insert($region_types);
    }
}
