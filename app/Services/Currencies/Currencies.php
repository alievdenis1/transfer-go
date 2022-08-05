<?php

namespace App\Services\Currencies;

class Currencies
{
    private array $exchangeRate;

    public function __construct(
        private ApiCurrencies $apiCurrencies
    )
    {
        $this->exchangeRate = $this->apiCurrencies->exchangeRate();
    }

    public function currenciesList(): array
    {
        $currencies = \App\Models\Currencies::all()->toArray();
        $currencies = array_map(function ($currency) use ($currencies) {
            //курс валюты к одному доллару
            $currency['equalDollar'] = (float) $this->exchangeRate[$currency["slug"]];
            return $currency;
        }, $currencies);

        foreach ($currencies as $key => $currencyFrom) {
            foreach ($currencies as $currencyTo) {
                $currencies[$key]['exchangesRates'][$currencyTo['slug']] = $this->convert($currencyFrom, $currencyTo);
            };
        };

        return \App\Models\Currencies::all()->toArray();
    }

    public function convert(array $from, array $to): float
    {
        return $to['equalDollar'] / $from['equalDollar'];
    }
}
