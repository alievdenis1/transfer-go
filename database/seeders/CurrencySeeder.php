<?php

namespace Database\Seeders;

use App\Models\Currencies;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            [
                'name' => 'Pound sterling',
                'slug' => 'GBP'
            ],
            [
                'name' => 'Hungarian Forint',
                'slug' => 'HUF'
            ],
            [
                'name' => 'Euro',
                'slug' => 'EUR'
            ],
            [
                'name' => 'Poland zloty',
                'slug' => 'PLN'
            ],
            [
                'name' => 'Danish Krone',
                'slug' => 'DKK'
            ],
            [
                'name' => 'Icelandic Krona',
                'slug' => 'ISK'
            ],
            [
                'name' => 'Norwegian Krone',
                'slug' => 'NOK'
            ],
            [
                'name' => 'Turkish lira',
                'slug' => 'TRY'
            ],
            [
                'name' => 'Czech Koruna',
                'slug' => 'CZK'
            ],
            [
                'name' => 'Swedish Krona',
                'slug' => 'SEK'
            ],
        ];

        foreach ($currencies as $itemCurrency) {
            $currency = new Currencies();
            $currency->name = $itemCurrency['name'];
            $currency->slug = $itemCurrency['slug'];
            $currency->save();
        }
    }
}
