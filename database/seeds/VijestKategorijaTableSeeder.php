<?php

use App\VijestKategorija;
use Illuminate\Database\Seeder;

class VijestKategorijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dodavanje default kategorija za vijesti koje klijent zahtjeva

        $kategorije = [
            ['naziv' => 'Općenito'],
            ['naziv' => 'Takmičenja/rezultati/turniri'],
            ['naziv' => 'Zanimljivosti'],
            ['naziv' => 'Šampioni svakodnevnice'],
            ['naziv' => 'Talent skener'],
            ['naziv' => 'Zdrav život (Nutricionizam, trening)'],
            ['naziv' => 'Stručni tekstovi'],
        ];

        VijestKategorija::insert($kategorije);
    }
}
