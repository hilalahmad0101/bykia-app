<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make(data: request()->all(), rules: [
                "name" => 'required|string',
                "email" => "required|email|unique:users,email",
                "password" => "required|confirmed",
            ]);

            if ($validator->fails()) {
                return response()->json(
                    data: [
                        'success' => false,
                        "message" => $validator->errors()->all(),
                    ],
                    status: 403
                );
            }
            $code = rand(100000, 99999);
            $user = User::create(attributes: [
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make(value: $request->password),
                "code" => $code
            ]);

            return response()->json(data: [
                'success' => true,
                'message' => 'User register successfully'
            ], status: 200);
        } catch (\Throwable $e) {
            return response()->json(data: [
                "success" => false,
                "message" => $e->getMessage(),
            ], status: 500);
        }
    }

    public function emailVerification(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make(data: request()->all(), rules: [
                "email" => "required|email|string|email|exists:users,email",
                "code" => 'required|exists:users,code',
            ]);
            if ($validator->fails()) {
                return response()->json(data: [
                    "success" => false,
                    "message" => $validator->errors()->all(),
                ]);
            }

            $user = User::whereEmailAndCode($request->email, $request->code)->first();
            if (!$user) {
                return response()->json(data: [
                    "success" => false,
                    "message" => "User not found"
                ]);
            }

            $user->email_verified_at = now();
            $user->is_verified = 1;
            $user->save();

            return response()->json(data: [
                "success" => true,
                "message" => "Account Verify successfully"
            ]);
        } catch (\Throwable $e) {
            return response()->json(data: [
                "success" => false,
                "message" => $e->getMessage(),
            ], status: 500);
        }
    }

    public function login(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make(data: request()->all(), rules: [
                "email" => "required|email|string|exists:users,email",
                "password" => "required"
            ]);
            if ($validator->fails()) {
                return response()->json(data: [
                    "success" => false,
                    "message" => $validator->errors()->all(),
                ]);
            }

            $user = User::whereEmail($request->email)->first();
            if (!$user) {
                return response()->json(data: [
                    "success" => false,
                    "message" => "Invalid email and password"
                ]);
            }

            if (!Hash::check(value: $request->password, hashedValue: $user->password)) {
                return response()->json(data: [
                    "success" => false,
                    "message" => "Invalid email and password"
                ]);
            }

            Auth::attempt(credentials: ['email' => $request->email, 'password' => $request->password]);
            $user = auth()->user();
            $token = $user->createToken(name: 'authToken')->plainTextToken;
            return response()->json(data: [
                "success" => true,
                "token" => $token,
                "message" => "Login successfully"
            ]);
        } catch (\Throwable $th) {
            return response()->json(data: [
                "success" => false,
                "message" => $th->getMessage(),
            ]);
        }
    }
}
