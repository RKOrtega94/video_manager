<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    function login(LoginRequest $request): JsonResponse
    {
        try {
            $user = User::where('email', $request->email)->first();

            if (!$user) {
                throw ValidationException::withMessages([
                    'The provided credentials are incorrect.',
                ]);
            }

            if (!password_verify($request->password, $user->password)) {
                throw ValidationException::withMessages([
                    'The provided credentials are incorrect.',
                ]);
            }

            $token = $user->createToken('auth_token')->accessToken;

            $response = [
                'user' => $user,
                'token' => $token,
            ];

            return $this->sendResponse($response, 'User login successfully.');
        } catch (ValidationException $e) {
            return $this->sendError($e->getMessage(), Response::HTTP_BAD_REQUEST);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
