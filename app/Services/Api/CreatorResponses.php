<?php

namespace App\Services\Api;

use Illuminate\Http\JsonResponse;

class CreatorResponses
{
    public function createJsonSuccess(array $data = []): JsonResponse
    {
        return response()->json(['Ok' => true, 'data' => $data]);
    }

    public function createJsonBad(string $details, int $statusCode): JsonResponse
    {
        return response()->json(['Ok' => false, 'details' => $details, 'status' => $statusCode], $statusCode);
    }
}
