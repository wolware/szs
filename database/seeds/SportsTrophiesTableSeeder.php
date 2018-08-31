<?php

use Illuminate\Database\Seeder;

class SportsTrophiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trophies = [
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 1],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 1],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 2],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 2],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 3],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 3],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 4],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 4],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 5],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 5],
            ['date' => '22.01.1991', 'name' => 'Pehar Lige', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 6],

        ];
        \App\SportsTrophies::insert($trophies);
    }
}
