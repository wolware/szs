<?php

use App\ObjectTypes;
use Illuminate\Database\Seeder;

class ObjectTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $object_types = [
            ['type' => 'Balon', 'icon' => 'storehouse.svg', 'object_table' => 'balon_objects', 'image' => 'balon.jpg', 'description' => 'Natkriveni sportski tereni'],
            ['type' => 'Bazen', 'icon' => 'pool.svg', 'object_table' => 'pool_objects', 'image' => 'bazen.jpg', 'description' => 'Bazeni za sport i rekreaciju'],
            ['type' => 'Sportska dvorana', 'icon' => 'stadium0.svg', 'object_table' => 'hall_objects', 'image' => 'dvorana.jpg', 'description' => 'Sportske sale i dvorane'],
            ['type' => 'Kuglana', 'icon' => 'kuglanje-icon.svg', 'object_table' => 'bowling_objects', 'image' => 'kuglana.jpg', 'description' => 'Kuglane za sport i rekreaciju'],
            ['type' => 'Skijalište', 'icon' => 'skijaliste.svg', 'object_table' => 'skiing_objects', 'image' => 'skijaliste.jpg', 'description' => 'Skijaški centri i staze'],
            ['type' => 'Stadion', 'icon' => 'stadium0.svg', 'object_table' => 'stadium_objects', 'image' => 'stadion.jpg', 'description' => 'Nogometni stadion'],
            ['type' => 'Streljana', 'icon' => 'streljana.svg', 'object_table' => 'shooting_objects', 'image' => 'streljana.jpg', 'description' => 'Streljane za sport i rekreaciju']
        ];

        foreach ($object_types as $object_type) {
            ObjectTypes::create($object_type);
        }
    }
}
