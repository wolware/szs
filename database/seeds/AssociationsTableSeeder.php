<?php

use App\Association;
use App\Region;
use App\Sport;
use Illuminate\Database\Seeder;

class AssociationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $associations = [
            [
                'region' => 'Bosna i Hercegovina',
                'sport' => 'Nogomet',
                'name' => 'Državni savez'
            ],
            [
                'region' => 'Bosna i Hercegovina',
                'sport' => 'Nogomet',
                'name' => 'Kantonalni savez'
            ],
            [
                'region' => 'Bosna i Hercegovina',
                'sport' => 'Nogomet',
                'name' => 'Entitetski savez'
            ],
        ];

        $associations = json_decode(json_encode($associations));

        foreach ($associations as $association) {
            $region = Region::where('name', $association->region)->first();
            $sport = Sport::where('name', $association->sport)->first();

            if($region && $sport) {
                Association::create([
                    'name' => $association->name,
                    'region_id' => $region->id,
                    'sport_id' => $sport->id,
                    'image' => 'default.png'
                ]);
            }
        }
    }
}
