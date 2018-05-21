<?php

use App\PlayerNature;
use Illuminate\Database\Seeder;

class PlayerNaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playerNatures = [
            ['name' => 'Profesionalni sportista'],
            ['name' => 'Sportista amater'],
            ['name' => 'Sportista rekreativac'],
            ['name' => 'Vrhunski sportista']
        ];

        PlayerNature::insert($playerNatures);
    }
}
