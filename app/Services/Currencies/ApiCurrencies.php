<?php

namespace App\Services\Currencies;
use Illuminate\Support\Facades\Http;

class ApiCurrencies
{
    const API = 'https://cdn.cur.su/api/latest.json';

    public function exchangeRate(): array
    {
        $response = Http::get(self::API);
        return $response->json()['rates'];
    }
}
