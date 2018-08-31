<?php

use Illuminate\Database\Seeder;

class SportsPeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = [
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 1],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 1],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 2],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 2],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 4],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 4],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 5],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 6],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 7],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 8],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 9],
            ['fName' => 'Himzo', 'lName' => 'Himzic', 'dob' => '22.01.1965', 'description' => 'Lorem ipsum dolor sit amet.', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 9],

        ];
        \App\SportsPeople::insert($people);
    }
}
