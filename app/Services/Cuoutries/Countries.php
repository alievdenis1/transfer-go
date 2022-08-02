<?php

namespace App\Services\Currencies;

class Countries
{
    public function list(): array
    {
        return \App\Models\Countries::all()->toArray();
    }
}
