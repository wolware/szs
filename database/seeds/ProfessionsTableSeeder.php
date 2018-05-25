<?php

use App\Profession;
use Illuminate\Database\Seeder;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professions = [
            ['name' => 'Trener'],
            ['name' => 'Sportski radnik'],
            ['name' => 'Vrhunski sportista'],
            ['name' => 'Agent'],
            ['name' => 'Psiholog'],
            ['name' => 'Doktor'],
            ['name' => 'Fizioterapeut'],
            ['name' => 'Nutricionista'],
            ['name' => 'Ostalo'],
        ];

        foreach ($professions as $profession) {
            Profession::create($profession);
        }
    }
}
