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
            ['name' => 'Aikido', 'with_disabilities' => false, 'icon' => 'aikido.png'],
            ['name' => 'Atletika', 'with_disabilities' => false, 'icon' => 'sprint (1).svg'],
            ['name' => 'Auto-Moto', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Badminton', 'with_disabilities' => false, 'icon' => 'badminton.svg'],
            ['name' => 'Biciklizam', 'with_disabilities' => false, 'icon' => 'bicycle.svg'],
            ['name' => 'Bob', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Boćanje', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Bodybuilding i Fitness', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Boks', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Curling', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Dizanje tegova', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Futsal', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Gimnastika', 'with_disabilities' => false, 'icon' => 'man-at-bar.svg'],
            ['name' => 'Golf', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Hokej', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Hrvanje', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Jedrenje', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Ju Jitsu', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Judo', 'with_disabilities' => false, 'icon' => 'judo.svg'],
            ['name' => 'Kajak Kanu i Rafting', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Karate', 'with_disabilities' => false, 'icon' => 'karate-high-kick.svg'],
            ['name' => 'Kickbox', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Klizanje', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Konjički sportovi', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Košarka', 'with_disabilities' => false, 'icon' => 'basketball.svg'],
            ['name' => 'Kung Fu', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Kuglanje', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Nogomet', 'with_disabilities' => false, 'icon' => 'soccer-ball-variant.svg'],
            ['name' => 'Mačevanje', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Odbojka', 'with_disabilities' => false, 'icon' => 'volleyball.svg'],
            ['name' => 'Planinarstvo', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Plivanje', 'with_disabilities' => false, 'icon' => 'swimming.svg'],
            ['name' => 'Ragbi', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Ronjenje', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Rukomet', 'with_disabilities' => false, 'icon' => 'handball.svg'],
            ['name' => 'Skijanje', 'with_disabilities' => false, 'icon' => 'ski.svg'],
            ['name' => 'Sportski ribolov', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Stoni tenis', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Streličarstvo', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Streljaštvo', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Šah', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Teakwondo', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Tenis', 'with_disabilities' => false, 'icon' => 'tennis.svg'],
            ['name' => 'Triatlon', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Vaterpolo', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Vazduhoplovstvo', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Veslanje', 'with_disabilities' => false, 'icon' => null],
            ['name' => 'Alpsko skijanje', 'with_disabilities' => true, 'icon' => null],
            ['name' => 'Atletika', 'with_disabilities' => true, 'icon' => null],
            ['name' => 'Košarka u kolicima', 'with_disabilities' => true, 'icon' => null],
            ['name' => 'Nordijsko skijanje', 'with_disabilities' => true, 'icon' => null],
            ['name' => 'Plivanje', 'with_disabilities' => true, 'icon' => null],
            ['name' => 'Sjedeća odbojka', 'with_disabilities' => true, 'icon' => null],
            ['name' => 'Stoni tenis', 'with_disabilities' => true, 'icon' => null],
            ['name' => 'Straljaštvo', 'with_disabilities' => true, 'icon' => null],
            ['name' => 'Šah', 'with_disabilities' => true, 'icon' => null]
        ];

        Sport::insert($sports);
    }
}
