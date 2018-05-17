<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Adding regions (Bosnia only for now)
        $regions = [
            [
                'name' => 'Europe',
                'region_type' => 1,
                'countries' => [
                    [
                        'name' => 'Bosnia and Herzegovina',
                        'region_type' => 2,
                        'provinces' => [
                            [
                                'name' => 'Federacija BiH',
                                'region_type' => 3,
                                'regions' => [
                                    [
                                        'name' => 'Unsko-sanski',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Posavski',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Tuzlanski',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Zeničko-dobojski',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Bosansko-podrinjski',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Srednjobosanski',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Hercegovačko-neretvanski',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Zapadnohercegovački',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Kanton Sarajevo',
                                        'region_type' => 4,
                                        'municipalities' => [
                                            [
                                                'name' => 'Centar',
                                                'region_type' => 5,
                                            ],
                                            [
                                                'name' => 'Hadžići',
                                                'region_type' => 5,
                                            ],
                                            [
                                                'name' => 'Ilidža',
                                                'region_type' => 5,
                                            ],
                                            [
                                                'name' => 'Ilijaš',
                                                'region_type' => 5,
                                            ],
                                            [
                                                'name' => 'Novi Grad',
                                                'region_type' => 5,
                                            ],
                                            [
                                                'name' => 'Novo Sarajevo',
                                                'region_type' => 5,
                                            ],
                                            [
                                                'name' => 'Stari Grad',
                                                'region_type' => 5,
                                            ],
                                            [
                                                'name' => 'Trnovo',
                                                'region_type' => 5,
                                            ],
                                            [
                                                'name' => 'Vogošća',
                                                'region_type' => 5,
                                            ],
                                        ]
                                    ],
                                    [
                                        'name' => 'Kanton 10',
                                        'region_type' => 4,
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Republika Srpska',
                                'region_type' => 3,
                                'regions' => [
                                    [
                                        'name' => 'Banjalučka',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Dobojsko-Bijeljinska',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Sarajevsko-Zvornička',
                                        'region_type' => 4,
                                    ],
                                    [
                                        'name' => 'Trebinjsko-Srbinjska',
                                        'region_type' => 4,
                                    ],
                                ]
                            ],
                            [
                                'name' => 'Brčko Distrikt',
                                'region_type' => 3
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $regions = json_decode(json_encode($regions));

        foreach ($regions as $continent) {
            $createContinent = App\Region::create([
               'name' => $continent->name,
               'region_type_id' => $continent->region_type
            ]);

            $continentId = $createContinent->id;

            if(isset($continent->countries)) {
                foreach ($continent->countries as $country) {
                    $createCountry = App\Region::create([
                        'name' => $country->name,
                        'region_type_id' => $country->region_type,
                        'region_parent' => $continentId,
                    ]);

                    $countryId = $createCountry->id;

                    if (isset($country->provinces)) {
                        foreach ($country->provinces as $province) {
                            $createProvince = App\Region::create([
                                'name' => $province->name,
                                'region_type_id' => $province->region_type,
                                'region_parent' => $countryId,
                            ]);

                            $provinceId = $createProvince->id;

                            if (isset($province->regions)) {
                                foreach ($province->regions as $region) {
                                    $createRegion = App\Region::create([
                                        'name' => $region->name,
                                        'region_type_id' => $region->region_type,
                                        'region_parent' => $provinceId,
                                    ]);

                                    $regionId = $createRegion->id;

                                    if (isset($region->municipalities)) {
                                        foreach ($region->municipalities as $municipality) {
                                            $createMunicipality = App\Region::create([
                                                'name' => $municipality->name,
                                                'region_type_id' => $municipality->region_type,
                                                'region_parent' => $regionId,
                                            ]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
