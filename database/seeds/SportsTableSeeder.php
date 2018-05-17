<?php

use App\Sport;
use Illuminate\Database\Seeder;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = [
            ['name' => 'Aikido', 'with_disabilities' => false],
            ['name' => 'Atletika', 'with_disabilities' => false],
            ['name' => 'Auto-Moto', 'with_disabilities' => false],
            ['name' => 'Badminton', 'with_disabilities' => false],
            ['name' => 'Biciklizam', 'with_disabilities' => false],
            ['name' => 'Bob', 'with_disabilities' => false],
            ['name' => 'Boćanje', 'with_disabilities' => false],
            ['name' => 'Bodybuilding i Fitness', 'with_disabilities' => false],
            ['name' => 'Boks', 'with_disabilities' => false],
            ['name' => 'Curling', 'with_disabilities' => false],
            ['name' => 'Dizanje tegova', 'with_disabilities' => false],
            ['name' => 'Futsal', 'with_disabilities' => false],
            ['name' => 'Gimnastika', 'with_disabilities' => false],
            ['name' => 'Golf', 'with_disabilities' => false],
            ['name' => 'Hokej', 'with_disabilities' => false],
            ['name' => 'Hrvanje', 'with_disabilities' => false],
            ['name' => 'Jedrenje', 'with_disabilities' => false],
            ['name' => 'Ju Jitsu', 'with_disabilities' => false],
            ['name' => 'Judo', 'with_disabilities' => false],
            ['name' => 'Kajak Kanu i Rafting', 'with_disabilities' => false],
            ['name' => 'Karate', 'with_disabilities' => false],
            ['name' => 'Kickbox', 'with_disabilities' => false],
            ['name' => 'Klizanje', 'with_disabilities' => false],
            ['name' => 'Konjički sportovi', 'with_disabilities' => false],
            ['name' => 'Košarka', 'with_disabilities' => false],
            ['name' => 'Kung Fu', 'with_disabilities' => false],
            ['name' => 'Kuglanje', 'with_disabilities' => false],
            ['name' => 'Nogomet', 'with_disabilities' => false],
            ['name' => 'Mačevanje', 'with_disabilities' => false],
            ['name' => 'Odbojka', 'with_disabilities' => false],
            ['name' => 'Planinarstvo', 'with_disabilities' => false],
            ['name' => 'Plivanje', 'with_disabilities' => false],
            ['name' => 'Ragbi', 'with_disabilities' => false],
            ['name' => 'Ronjenje', 'with_disabilities' => false],
            ['name' => 'Rukomet', 'with_disabilities' => false],
            ['name' => 'Skijanje', 'with_disabilities' => false],
            ['name' => 'Sportski ribolov', 'with_disabilities' => false],
            ['name' => 'Stoni tenis', 'with_disabilities' => false],
            ['name' => 'Streličarstvo', 'with_disabilities' => false],
            ['name' => 'Streljaštvo', 'with_disabilities' => false],
            ['name' => 'Šah', 'with_disabilities' => false],
            ['name' => 'Teakwondo', 'with_disabilities' => false],
            ['name' => 'Tenis', 'with_disabilities' => false],
            ['name' => 'Triatlon', 'with_disabilities' => false],
            ['name' => 'Vaterpolo', 'with_disabilities' => false],
            ['name' => 'Vazduhoplovstvo', 'with_disabilities' => false],
            ['name' => 'Veslanje', 'with_disabilities' => false],
            ['name' => 'Alpsko skijanje', 'with_disabilities' => true],
            ['name' => 'Atletika', 'with_disabilities' => true],
            ['name' => 'Košarka u kolicima', 'with_disabilities' => true],
            ['name' => 'Nordijsko skijanje', 'with_disabilities' => true],
            ['name' => 'Plivanje', 'with_disabilities' => true],
            ['name' => 'Sjedeća odbojka', 'with_disabilities' => true],
            ['name' => 'Stoni tenis', 'with_disabilities' => true],
            ['name' => 'Straljaštvo', 'with_disabilities' => true],
            ['name' => 'Šah', 'with_disabilities' => true]
        ];

        Sport::insert($sports);
    }
}
