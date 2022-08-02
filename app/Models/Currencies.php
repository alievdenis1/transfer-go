<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    use HasFactory;

    public function countries()
    {
        return $this->belongsToMany(
            Countries::class,
            'countries_currencies',
            'currency_id',
            'country_id'
        );
    }
}
