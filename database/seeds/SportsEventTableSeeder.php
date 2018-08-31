<?php

use Illuminate\Database\Seeder;

class SportsEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $events = [
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 1],
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 1],
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 2],
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 2],
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 3],
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 3],
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 4],
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 4],
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 5],
           ['date_of_event' => '22.01.1990', 'name_of_event' => 'Olimpijska medalja', 'description_of_event' => 'Lorem ipsum dolor sit amet', 'img' => 'sports/aikido_desktop_wallpaper_7.jpg', 'sport_id' => 5],
       ];
       \App\SportsEvent::insert($events);
    }
}
