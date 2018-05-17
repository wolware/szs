<?php

use App\ClubCategory;
use Illuminate\Database\Seeder;

class ClubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $club_categories = [
            ['name' => 'Muški'],
            ['name' => 'Ženski'],
            ['name' => 'Mješovito']
        ];

        ClubCategory::insert($club_categories);
    }
}
