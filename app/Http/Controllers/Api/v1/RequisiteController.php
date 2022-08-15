<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Requisite;
use App\Services\Api\CreatorResponses;
use App\Services\Order\Order;
use Illuminate\Http\Request;

class RequisiteController extends Controller
{
    public function __construct(
        private CreatorResponses $creatorResponses
    ) {}

    public function show()
    {
        $requisite = Requisite::first()->toArray();

        return $this->creatorResponses->createJsonSuccess(
            ['requisites' => $requisite]
        );
    }
}
