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
                'name' => 'Россия',
                'slug' => 'RU',
                'currencies' => [
                    'RUB',
                ]
            ],
            [
                'name' => 'Украина',
                'slug' => 'UA',
                'currencies' => [
                    'UAH',
                ]
            ],
            [
                'name' => 'США',
                'slug' => 'US',
                'currencies' => [
                    'USD',
                ]
            ],
            [
                'name' => 'Польша',
                'slug' => 'PL',
                'currencies' => [
                    'EUR',
                    'PLN'
                ]
            ],
            [
                'name' => 'Германия',
                'slug' => 'DE',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Канада',
                'slug' => 'CA',
                'currencies' => [
                    'CAD',
                ]
            ],
            [
                'name' => 'Британия',
                'slug' => 'GB',
                'currencies' => [
                    'GBP',
                ]
            ],
            [
                'name' => 'Венгрия',
                'slug' => 'HU',
                'currencies' => [
                    'EUR',
                    'HUF'
                ]
            ],
            [
                'name' => 'Австрия',
                'slug' => 'AT',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Бельгия',
                'slug' => 'BE',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Греция',
                'slug' => 'GR',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Дания',
                'slug' => 'DK',
                'currencies' => [
                    'EUR',
                    'DKK'
                ]
            ],
            [
                'name' => 'Ирландия',
                'slug' => 'IE',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Испания',
                'slug' => 'ES',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Италия',
                'slug' => 'IT',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Кипр',
                'slug' => 'CY',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Латвия',
                'slug' => 'LV',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Литва',
                'slug' => 'LT',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Норвегия',
                'slug' => 'NO',
                'currencies' => [
                    'EUR',
                    'NOK',
                ]
            ],
            [
                'name' => 'Нидерланды',
                'slug' => 'NL',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Франция',
                'slug' => 'FR',
                'currencies' => [
                    'EUR',
                ]
            ],
            [
                'name' => 'Швеция',
                'slug' => 'SE',
                'currencies' => [
                    'EUR',
                    'SEK',
                ]
            ],
            [
                'name' => 'Чехия',
                'slug' => 'CZ',
                'currencies' => [
                    'EUR',
                    'CZK',
                ]
            ],
            [
                'name' => 'Турция',
                'slug' => 'TR',
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
