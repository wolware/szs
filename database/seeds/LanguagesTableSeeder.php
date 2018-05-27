<?php

use App\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'Engleski'],
            ['name' => 'Njemački'],
            ['name' => 'Holandski'],
            ['name' => 'Ruski'],
            ['name' => 'Drugo']
        ];

        foreach ($languages as $language) {
            Language::create($language);
        }
    }
}
