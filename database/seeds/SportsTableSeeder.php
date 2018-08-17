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
            ['name' => 'Aikido', 'with_disabilities' => false, 'icon' => 'sports/aikido_desktop_wallpaper_7.jpg', 'players_table' => 'aikido_players', 'active' => true, 'icon_on_adding'=>'aikido.png'],
            ['name' => 'Atletika', 'with_disabilities' => false, 'icon' => 'sports/amel_tuka-1920x1080.jpg', 'players_table' => 'athletics_players', 'active' => true, 'icon_on_adding'=>'athlete-hanging-of-rings-couple-to-practice-gymnastics.svg'],
            ['name' => 'Auto-Moto', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'automoto_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Badminton', 'with_disabilities' => false, 'icon' => 'sports/badminton.jpg', 'players_table' => 'badminton_players', 'active' => true, 'icon_on_adding'=>'badminton.svg'],
            ['name' => 'Biciklizam', 'with_disabilities' => false, 'icon' => 'sports/biciklizam.jpg', 'players_table' => 'cycling_players', 'active' => true, 'icon_on_adding'=>'bicycle.svg'],
            ['name' => 'Bob', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'bob_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Boćanje', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'boules_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Bodybuilding i Fitness', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'bodybuilding_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Boks', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'boxing_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Curling', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'curling_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Dizanje tegova', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'weightlifting_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Futsal', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'futsal_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Gimnastika', 'with_disabilities' => false, 'icon' => 'sports/gimnastika.jpg', 'players_table' => 'gymnastics_players', 'active' => true, 'icon_on_adding'=>'man-at-bar.svg'],
            ['name' => 'Golf', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'golf_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Hokej', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'hokey_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Hrvanje', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'wrestling_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Jedrenje', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'sailing_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Ju Jitsu', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'jujitsu_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Judo', 'with_disabilities' => false, 'icon' => 'sports/judo.jpg', 'players_table' => 'judo_players', 'active' => true, 'icon_on_adding'=>'judo.svg'],
            ['name' => 'Kajak Kanu i Rafting', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'rafting_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Karate', 'with_disabilities' => false, 'icon' => 'sports/karate.jpg', 'players_table' => 'karate_players', 'active' => true, 'icon_on_adding'=>'karate-high-kick.svg'],
            ['name' => 'Kickbox', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'kickboxing_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Klizanje', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'skating_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Konjički sportovi', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'equestrian_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Košarka', 'with_disabilities' => false, 'icon' => 'sports/kosarka.jpg', 'players_table' => 'basketball_players', 'active' => true, 'icon_on_adding'=>'basketball.svg'],
            ['name' => 'Kung Fu', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'kungfu_players', 'active' => false], 'icon_on_adding'=>' ',
            ['name' => 'Kuglanje', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'bowling_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Nogomet', 'with_disabilities' => false, 'icon' => 'sports/edin-dzeko.jpg', 'players_table' => 'football_players', 'active' => true, 'icon_on_adding'=>'soccer-ball-variant.svg'],
            ['name' => 'Mačevanje', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'fencing_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Odbojka', 'with_disabilities' => false, 'icon' => 'sports/odbojka.jpg', 'players_table' => 'volleyball_players', 'active' => true, 'icon_on_adding'=>'volleyball.svg'],
            ['name' => 'Planinarstvo', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'mountaineering_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Plivanje', 'with_disabilities' => false, 'icon' => 'sports/plivanje.jpg', 'players_table' => 'swimming_players', 'active' => true, 'icon_on_adding'=>'swimming.svg'],
            ['name' => 'Ragbi', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'rugby_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Ronjenje', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'diving_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Rukomet', 'with_disabilities' => false, 'icon' => 'sports/rukomet.jpg', 'players_table' => 'handball_players', 'active' => true, 'icon_on_adding'=>'handball.svg'],
            ['name' => 'Skijanje', 'with_disabilities' => false, 'icon' => 'sports/skijanje.jpg', 'players_table' => 'skiing_players', 'active' => true, 'icon_on_adding'=>'skier-going-down-a-hill.svg'],
            ['name' => 'Sportski ribolov', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'fishing_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Stoni tenis', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'tabletennis_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Streličarstvo', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'archery_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Streljaštvo', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'shooting_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Šah', 'with_disabilities' => false, 'icon' => 'sports/sah.jpg', 'players_table' => 'chess_players', 'active' => true, 'icon_on_adding'=>'chess-piece.svg'],
            ['name' => 'Taekwondo', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'taekwondo_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Tenis', 'with_disabilities' => false, 'icon' => 'sports/tenis.jpeg', 'players_table' => 'tennis_players', 'active' => true, 'icon_on_adding'=>'tennis.svg'],
            ['name' => 'Triatlon', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'triathlon_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Vaterpolo', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'waterpolo_players', 'active' => false, 'icon_on_adding'=> ''],
            ['name' => 'Vazduhoplovstvo', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'aviation_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Veslanje', 'with_disabilities' => false, 'icon' => null, 'players_table' => 'rowing_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Alpsko skijanje', 'with_disabilities' => true, 'icon' => null, 'players_table' => 'skiing_disabled_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Atletika', 'with_disabilities' => true, 'icon' => null, 'players_table' => 'athletics_disabled_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Košarka u kolicima', 'with_disabilities' => true, 'icon' => null, 'players_table' => 'basketball_disabled_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Nordijsko skijanje', 'with_disabilities' => true, 'icon' => null, 'players_table' => 'nordic_skiing_disabled_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Plivanje', 'with_disabilities' => true, 'icon' => null, 'players_table' => 'swimming_disabled_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Sjedeća odbojka', 'with_disabilities' => true, 'icon' => null, 'players_table' => 'sitting_volleyball_disabled_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Stoni tenis', 'with_disabilities' => true, 'icon' => null, 'players_table' => 'tabletennis_disabled_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Straljaštvo', 'with_disabilities' => true, 'icon' => null, 'players_table' => 'shooting_disabled_players', 'active' => false, 'icon_on_adding'=>' '],
            ['name' => 'Šah', 'with_disabilities' => true, 'icon' => null, 'players_table' => 'chess_disabled_players', 'active' => false, 'icon_on_adding'=>' ']
        ];

        Sport::insert($sports);
    }
}
