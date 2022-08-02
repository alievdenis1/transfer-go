<?php

namespace App\Services\Countries;

class Countries
{
    public function list(): array
    {
        $countries = \App\Models\Countries::all();
        $arrCountries = [];

        foreach ($countries as $country) {
            foreach ($country->currencies as $currency) {
                $arrCountries[] = [
                    'id' => $country->id,
                    'name' => $country->name,
                    'slug' => $country->slug,
                    'currency' => [
                        'id' => $currency->id,
                        'name' => $currency->name,
                        'slug' => $currency->slug
                    ]
                ];
            };
        }

        return $arrCountries;
    }
}
