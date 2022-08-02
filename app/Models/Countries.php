<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    public function currencies()
    {
        return $this->belongsToMany(
            Currencies::class,
            'countries_currencies',
            'country_id',
            'currency_id'
        );
    }
}
