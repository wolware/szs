<?php

use App\EventType;
use Illuminate\Database\Seeder;

class EventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_types = [
            ['name' => 'Turnir'],
            ['name' => 'Konferencija'],
            ['name' => 'Promocija'],
            ['name' => 'Dodjela nagrada'],
            ['name' => 'Ostalo']
        ];

        foreach ($event_types as $type) {
            EventType::create($type);
        }
    }
}
