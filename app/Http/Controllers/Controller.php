<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sendResponse($data, $message = 'Success', $code = Response::HTTP_OK): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message,
        ], $code);
    }

    public function sendError($message = 'Error', $code = Response::HTTP_BAD_REQUEST): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $code);
    }
}
