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
            ['name' => 'Aikido', 'with_disabilities' => false, 'icon_on_adding' => 'aikido.png', 'icon' => 'sports/aikido_desktop_wallpaper_7.jpg', 'players_table' => 'aikido_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Atletika', 'with_disabilities' => false, 'icon_on_adding' => 'athlete-hanging-of-rings-couple-to-practice-gymnastics.svg', 'icon' => 'sports/amel_tuka-1920x1080.jpg', 'players_table' => 'athletics_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Auto-Moto', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/auto_moto.jpg', 'players_table' => 'automoto_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Badminton', 'with_disabilities' => false, 'icon_on_adding' => 'badminton.svg', 'icon' => 'sports/badminton.jpg', 'players_table' => 'badminton_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Biciklizam', 'with_disabilities' => false, 'icon_on_adding' => 'bicycle.svg', 'icon' => 'sports/biciklizam.jpg', 'players_table' => 'cycling_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Bob', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/bob.jpg', 'players_table' => 'bob_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Boćanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/bocanje.jpg', 'players_table' => 'boules_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Bodybuilding i Fitness', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/fitness.jpg', 'players_table' => 'bodybuilding_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Boks', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/boks.jpg', 'players_table' => 'boxing_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Curling', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/curling.jpg', 'players_table' => 'curling_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Dizanje tegova', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/tegovi.jpg', 'players_table' => 'weightlifting_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Futsal', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/futsal.jpg', 'players_table' => 'futsal_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Gimnastika', 'with_disabilities' => false, 'icon_on_adding' => 'man-at-bar.svg', 'icon' => 'sports/gimnastika.jpg', 'players_table' => 'gymnastics_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Golf', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/golf.jpg', 'players_table' => 'golf_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Hokej', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/hokej.jpg', 'players_table' => 'hokey_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Hrvanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/hrvanje.jpg', 'players_table' => 'wrestling_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Jedrenje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/jedrenje.jpg', 'players_table' => 'sailing_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Ju Jitsu', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/jiu-jitsu.jpg', 'players_table' => 'jujitsu_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Judo', 'with_disabilities' => false, 'icon_on_adding' => 'judo.svg', 'icon' => 'sports/judo.jpg', 'players_table' => 'judo_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Kajak Kanu i Rafting', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/kkr.jpg', 'players_table' => 'rafting_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Karate', 'with_disabilities' => false, 'icon_on_adding' => 'karate-high-kick.svg', 'icon' => 'sports/karate.jpg', 'players_table' => 'karate_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Kickbox', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/kickbox.jpg', 'players_table' => 'kickboxing_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Klizanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/klizanje.jpg', 'players_table' => 'skating_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Konjički sportovi', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/konjicki.jpg', 'players_table' => 'equestrian_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Košarka', 'with_disabilities' => false, 'icon_on_adding' => 'basketball.svg', 'icon' => 'sports/kosarka.jpg', 'players_table' => 'basketball_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Kung Fu', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/kungfu.jpg', 'players_table' => 'kungfu_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Kuglanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/kuglanje.jpg', 'players_table' => 'bowling_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Nogomet', 'with_disabilities' => false, 'icon_on_adding' => 'soccer-ball-variant.svg', 'icon' => 'sports/edin-dzeko.jpg', 'players_table' => 'football_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Mačevanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/macevanje.jpg', 'players_table' => 'fencing_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Odbojka', 'with_disabilities' => false, 'icon_on_adding' => 'volleyball.svg', 'icon' => 'sports/odbojka.jpg', 'players_table' => 'volleyball_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Planinarstvo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/planinarstvo.jpg', 'players_table' => 'mountaineering_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Plivanje', 'with_disabilities' => false, 'icon_on_adding' => 'swimming.svg', 'icon' => 'sports/plivanje.jpg', 'players_table' => 'swimming_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Ragbi', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/ragbi.jpg', 'players_table' => 'rugby_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Ronjenje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/ronjenje.jpg', 'players_table' => 'diving_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Rukomet', 'with_disabilities' => false, 'icon_on_adding' => 'handball.svg', 'icon' => 'sports/rukomet.jpg', 'players_table' => 'handball_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Skijanje', 'with_disabilities' => false, 'icon_on_adding' => 'skier-going-down-a-hill.svg', 'icon' => 'sports/skijanje.jpg', 'players_table' => 'skiing_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Sportski ribolov', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/ribolov.jpg', 'players_table' => 'fishing_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Stoni tenis', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/stoni-tenis.jpg', 'players_table' => 'tabletennis_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Streličarstvo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/strelicarstvo.jpg', 'players_table' => 'archery_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Streljaštvo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/streljastvo.jpg', 'players_table' => 'shooting_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Šah', 'with_disabilities' => false, 'icon_on_adding' => 'chess-piece.svg', 'icon' => 'sports/sah.jpg', 'players_table' => 'chess_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Taekwondo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/taekwondo.jpg', 'players_table' => 'taekwondo_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Tenis', 'with_disabilities' => false, 'icon_on_adding' => 'tennis.svg', 'icon' => 'sports/tenis.jpeg', 'players_table' => 'tennis_players','active' => true,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Triatlon', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/triatlon.jpg', 'players_table' => 'triathlon_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Vaterpolo', 'with_disabilities' => false, 'icon_on_adding'=> '', 'icon' => 'sports/vaterpolo.JPG', 'players_table' => 'waterpolo_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Vazduhoplovstvo', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/vazduhoplovstvo.jpg', 'players_table' => 'aviation_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Veslanje', 'with_disabilities' => false, 'icon_on_adding' => null, 'icon' => 'sports/veslanje.jpg', 'players_table' => 'rowing_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Alpsko skijanje', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => 'sports/disability/alpsko.jpg', 'players_table' => 'skiing_disabled_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Atletika', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => 'sports/disability/atletika.jpg', 'players_table' => 'athletics_disabled_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Košarka u kolicima', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => 'sports/disability/kosarka.jpg', 'players_table' => 'basketball_disabled_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Nordijsko skijanje', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => 'sports/disability/skijanje.jpg', 'players_table' => 'nordic_skiing_disabled_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Plivanje', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => 'sports/disability/plivanje.jpg', 'players_table' => 'swimming_disabled_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Sjedeća odbojka', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => 'sports/disability/odbojka.jpg', 'players_table' => 'sitting_volleyball_disabled_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Stoni tenis', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => 'sports/disability/stoni.jpg', 'players_table' => 'tabletennis_disabled_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Straljaštvo', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => 'sports/disability/streljastvo.jpg', 'players_table' => 'shooting_disabled_players','active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>'],
            ['name' => 'Šah', 'with_disabilities' => true, 'icon_on_adding' => null, 'icon' => 'sports/disability/sah.jpg', 'players_table' => 'chess_disabled_players', 'active' => false,'about_sport'=>'<h3>Lorem ipsum dolor sit amet.</h3> <p>Lorem ipsum dolor sit amet.</p> <p>Lorem ipsum dolor sit amet.<p> <p>Loreml</p>']
        ];

        Sport::insert($sports);
    }
}
