<?php

namespace Database\Seeders;

use App\Models\Countries;
use App\Models\Currencies;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Poland',
                'slug' => 'PL',
                'currencies' => [
                    'EUR',
                    'PLN'
                ]
            ],
            [
                'name' => 'Great Britain',
                'slug' => 'GB',
                'currencies' => [
                    'GBP',
                ]
            ],
            [
                'name' => 'Hungary',
                'slug' => 'HU',
                'currencies' => [
                    'EUR',
                    'HUF'
                ]
            ],
            [
                'name' => 'Austria',
                'slug' => 'AT',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Belgium',
                'slug' => 'BE',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Germany',
                'slug' => 'GE',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Greece',
                'slug' => 'GR',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Denmark',
                'slug' => 'DK',
                'currencies' => [
                    'EUR',
                    'DKK'
                ]
            ],
            [
                'name' => 'Irish',
                'slug' => 'IE',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Spain',
                'slug' => 'ES',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Italy',
                'slug' => 'IT',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Cyprus',
                'slug' => 'CY',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Latvia',
                'slug' => 'LV',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Lithuania',
                'slug' => 'LT',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Norway',
                'slug' => 'NO',
                'currencies' => [
                    'EUR',
                    'NOK',
                ]
            ],
            [
                'name' => 'Netherlands',
                'slug' => 'NL',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'France',
                'slug' => 'FR',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Lithuania',
                'slug' => 'LT',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Sweden',
                'slug' => 'SE',
                'currencies' => [
                    'EUR',
                    'SEK',
                ]
            ],
            [
                'name' => 'Czech',
                'slug' => 'CZ',
                'currencies' => [
                    'EUR',
                    'CZK',
                ]
            ],
            [
                'name' => 'Turkey',
                'slug' => 'CZ',
                'currencies' => [
                    'TRY',
                ]
            ],
        ];
        $currencies = Currencies::all()->toArray();

        foreach ($currencies as $currency) {
            $currencies[$currency["slug"]] =  $currency;
        }

        foreach ($countries as $itemCountry) {
            $country = new Countries();
            $country->name = $itemCountry['name'];
            $country->slug = $itemCountry['slug'];
            $country->save();
            foreach ($itemCountry['currencies'] as $currency) {
                $country->currencies()->attach($currencies[$currency]["id"]);
            }
        }
    }
}
