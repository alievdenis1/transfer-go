<?php

namespace App\Services\Currencies;

class Currencies
{
    const API = 'https://cdn.cur.su/api/latest.json';

    public function list(): array
    {
        return \App\Models\Currencies::all()->toArray();
    }
}
