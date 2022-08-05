<?php

namespace App\Services\Countries;

use App\Services\Currencies\Currencies;

class Countries
{
    public function __construct(private Currencies $currencies)
    {}

    public function list(): array
    {
        $countries = \App\Models\Countries::all();
        $arrCountries = [];

        $currenciesList = [];
        foreach ($this->currencies->currenciesList() as $currency) {
            $currenciesList[$currency['id']] = $currency;
        }

        foreach ($countries as $country) {
            foreach ($country->currencies as $currency) {
                $arrCountries[] = [
                    'id' => $country->id,
                    'name' => $country->name,
                    'slug' => $country->slug,
                    'currency' => [
                        'id' => $currency->id,
                        'name' => $currency->name,
                        'slug' => $currency->slug,
                        'exchangesRates' => $currenciesList[$currency->id]['exchangesRates']
                    ]
                ];
            };
        }

        return $arrCountries;
    }
}
