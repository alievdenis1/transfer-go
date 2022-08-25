<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use App\Models\User;
use App\Services\Api\CreatorResponses;

class UserController extends Controller
{
    public function __construct(
        private CreatorResponses $creatorResponses
    )
    {}

    public function getData(int $userId)
    {
        $minsum = GlobalSetting::first()->minsum;

        $user = User::find($userId);
        $user = [
            'id' => $userId,
            'name' => $user['name'],
            'email' => $user['email'],
            'min_payment' => $user['min_payment'] ?? $minsum,
        ];


        return $this->creatorResponses->createJsonSuccess(['user' => $user]);
    }
}
