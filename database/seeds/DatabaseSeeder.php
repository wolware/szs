<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(VijestKategorijaTableSeeder::class);
        $this->call(RegionTypesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(SportsTableSeeder::class);
        $this->call(ClubCategoriesTableSeeder::class);
        $this->call(AssociationsTableSeeder::class);
        $this->call(PlayerNaturesTableSeeder::class);
    }
}
