<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Requisite;
use App\Services\Api\CreatorResponses;
use App\Services\Order\Order;
use Illuminate\Http\Request;

class RequisiteController extends Controller
{
    public function __construct(
        private CreatorResponses $creatorResponses
    ) {}

    public function show(Request $request)
    {
        $idCountry = Countries::where('slug', $request->country)->first()->id;
        $requisite = Requisite::where('country_id', $idCountry)->first()->toArray();

        return $this->creatorResponses->createJsonSuccess(
            ['requisites' => $requisite]
        );
    }
}
