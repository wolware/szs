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
            ['name' => 'Aikido', 'with_disabilities' => false, 'icon_on_adding' => 'aikido.png', 'icon' => 'sports/aikido_desktop_wallpaper_7.jpg', 'players_table' => 'aikido_players', 'active' => true],
            ['name' => 'Atletika', 'with_disabilities' => false, 'icon_on_adding' => 'athlete-hanging-of-rings-couple-to-practice-gymnastics.svg', 'icon' => 'sports/amel_tuka-1920x1080.jpg', 'players_table' => 'athletics_players', 'active' => true],
            ['name' => 'Auto-Moto', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'automoto_players', 'active' => false],
            ['name' => 'Badminton', 'with_disabilities' => false, 'icon_on_adding' => 'badminton.svg', 'icon' => 'sports/badminton.jpg', 'players_table' => 'badminton_players', 'active' => true],
            ['name' => 'Biciklizam', 'with_disabilities' => false, 'icon_on_adding' => 'bicycle.svg', 'icon' => 'sports/biciklizam.jpg', 'players_table' => 'cycling_players', 'active' => true],
            ['name' => 'Bob', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'bob_players', 'active' => false],
            ['name' => 'Boćanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'boules_players', 'active' => false],
            ['name' => 'Bodybuilding i Fitness', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'bodybuilding_players', 'active' => false],
            ['name' => 'Boks', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'boxing_players', 'active' => false],
            ['name' => 'Curling', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'curling_players', 'active' => false],
            ['name' => 'Dizanje tegova', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'weightlifting_players', 'active' => false],
            ['name' => 'Futsal', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'futsal_players', 'active' => false],
            ['name' => 'Gimnastika', 'with_disabilities' => false, 'icon_on_adding' => 'man-at-bar.svg', 'icon' => 'sports/gimnastika.jpg', 'players_table' => 'gymnastics_players', 'active' => true],
            ['name' => 'Golf', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'golf_players', 'active' => false],
            ['name' => 'Hokej', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'hokey_players', 'active' => false],
            ['name' => 'Hrvanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'wrestling_players', 'active' => false],
            ['name' => 'Jedrenje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'sailing_players', 'active' => false],
            ['name' => 'Ju Jitsu', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'jujitsu_players', 'active' => false],
            ['name' => 'Judo', 'with_disabilities' => false, 'icon_on_adding' => 'judo.svg', 'icon' => 'sports/judo.jpg', 'players_table' => 'judo_players', 'active' => true],
            ['name' => 'Kajak Kanu i Rafting', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'rafting_players', 'active' => false],
            ['name' => 'Karate', 'with_disabilities' => false, 'icon_on_adding' => 'karate-high-kick.svg', 'icon' => 'sports/karate.jpg', 'players_table' => 'karate_players', 'active' => true],
            ['name' => 'Kickbox', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'kickboxing_players', 'active' => false],
            ['name' => 'Klizanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'skating_players', 'active' => false],
            ['name' => 'Konjički sportovi', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'equestrian_players', 'active' => false],
            ['name' => 'Košarka', 'with_disabilities' => false, 'icon_on_adding' => 'basketball.svg', 'icon' => 'sports/kosarka.jpg', 'players_table' => 'basketball_players', 'active' => true],
            ['name' => 'Kung Fu', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'kungfu_players', 'active' => false],
            ['name' => 'Kuglanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'bowling_players', 'active' => false],
            ['name' => 'Nogomet', 'with_disabilities' => false, 'icon_on_adding' => 'soccer-ball-variant.svg', 'icon' => 'sports/edin-dzeko.jpg', 'players_table' => 'football_players', 'active' => true],
            ['name' => 'Mačevanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'fencing_players', 'active' => false],
            ['name' => 'Odbojka', 'with_disabilities' => false, 'icon_on_adding' => 'volleyball.svg', 'icon' => 'sports/odbojka.jpg', 'players_table' => 'volleyball_players', 'active' => true],
            ['name' => 'Planinarstvo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'mountaineering_players', 'active' => false],
            ['name' => 'Plivanje', 'with_disabilities' => false, 'icon_on_adding' => 'swimming.svg', 'icon' => 'sports/plivanje.jpg', 'players_table' => 'swimming_players', 'active' => true],
            ['name' => 'Ragbi', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'rugby_players', 'active' => false],
            ['name' => 'Ronjenje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'diving_players', 'active' => false],
            ['name' => 'Rukomet', 'with_disabilities' => false, 'icon_on_adding' => 'handball.svg', 'icon' => 'sports/rukomet.jpg', 'players_table' => 'handball_players', 'active' => true],
            ['name' => 'Skijanje', 'with_disabilities' => false, 'icon_on_adding' => 'skier-going-down-a-hill.svg', 'icon' => 'sports/skijanje.jpg', 'players_table' => 'skiing_players', 'active' => true],
            ['name' => 'Sportski ribolov', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'fishing_players', 'active' => false],
            ['name' => 'Stoni tenis', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'tabletennis_players', 'active' => false],
            ['name' => 'Streličarstvo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'archery_players', 'active' => false],
            ['name' => 'Streljaštvo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'shooting_players', 'active' => false],
            ['name' => 'Šah', 'with_disabilities' => false, 'icon_on_adding' => 'chess-piece.svg', 'icon' => 'sports/sah.jpg', 'players_table' => 'chess_players', 'active' => true],
            ['name' => 'Taekwondo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'taekwondo_players', 'active' => false],
            ['name' => 'Tenis', 'with_disabilities' => false, 'icon_on_adding' => 'tennis.svg', 'icon' => 'sports/tenis.jpeg', 'players_table' => 'tennis_players', 'active' => true],
            ['name' => 'Triatlon', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'triathlon_players', 'active' => false],
            ['name' => 'Vaterpolo', 'with_disabilities' => false, 'icon_on_adding'=> '', 'icon' => null, 'players_table' => 'waterpolo_players', 'active' => false],
            ['name' => 'Vazduhoplovstvo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'aviation_players', 'active' => false],
            ['name' => 'Veslanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'rowing_players', 'active' => false],
            ['name' => 'Alpsko skijanje', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'skiing_disabled_players', 'active' => false],
            ['name' => 'Atletika', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'athletics_disabled_players', 'active' => false],
            ['name' => 'Košarka u kolicima', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'basketball_disabled_players', 'active' => false],
            ['name' => 'Nordijsko skijanje', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'nordic_skiing_disabled_players', 'active' => false],
            ['name' => 'Plivanje', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'swimming_disabled_players', 'active' => false],
            ['name' => 'Sjedeća odbojka', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'sitting_volleyball_disabled_players', 'active' => false],
            ['name' => 'Stoni tenis', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'tabletennis_disabled_players', 'active' => false],
            ['name' => 'Straljaštvo', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'shooting_disabled_players', 'active' => false],
            ['name' => 'Šah', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => null, 'players_table' => 'chess_disabled_players', 'active' => false]
        ];

        Sport::insert($sports);
    }
}
