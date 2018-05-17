<?php

use App\Association;
use App\Region;
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
                'region' => 'Bosnia and Herzegovina',
                'name' => 'Državni savez'
            ],
            [
                'region' => 'Bosnia and Herzegovina',
                'name' => 'Kantonalni savez'
            ],
            [
                'region' => 'Bosnia and Herzegovina',
                'name' => 'Entitetski savez'
            ],
        ];

        $associations = json_decode(json_encode($associations));

        foreach ($associations as $association) {
            $region = Region::where('name', $association->region)->first();

            if($region) {
                Association::create([
                   'name' => $association->name,
                   'region_id' => $region->id
                ]);
            }
        }
    }
}
