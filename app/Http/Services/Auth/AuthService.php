<?php

namespace App\Http\Services\Auth;

use App\Http\Services\Service;
use Exception;
use Illuminate\Support\Facades\Http;

class AuthService extends Service
{
    public static function authentication(array $request, string $url, $params)
    {
        try {
            $headers = [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ];

            $response = Http::withHeaders($headers)->post($url . $params, [
                'userid' => $request['userid'],
                'password' => $request['password']
            ]);

            return json_decode($response->getBody());
        } catch (Exception $th) {
            if (in_array($th->getCode(), self::$error_codes)) {
                throw new Exception($th->getMessage(), $th->getCode());
            }
            throw new Exception($th->getMessage(), 500);
        }
    }
}
