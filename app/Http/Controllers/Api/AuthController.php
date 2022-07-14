<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\Auth\AuthService;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->baseUrl = config('credentials.base_url_testing');
    }

    public function login(Request $request)
    {
        try {
            $data = $request->validate([
                'userid' => 'required|string',
                'password' => 'required'
            ]);

            return AuthService::authentication($data, $this->baseUrl, 'auth/signin');
        } catch (ClientException $e) {
            return response()->json(json_decode($e->getResponse()->getBody(), true), $e->getResponse()->getStatusCode());
        }
    }

    public function logout(Request $request)
    {
        try {
            $data = $request->validate([
                'userid' => 'required|string',
                'password' => 'required|string'
            ]);

            return AuthService::authentication($data, $this->baseUrl, 'auth/logout');
        } catch (ClientException $e) {
            return response()->json(json_decode($e->getResponse()->getBody(), true), $e->getResponse()->getStatusCode());
        }
    }

    public function getBiayaList(Request $request)
    {
        try {
            $headers = [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ];

            $data = $request->validate([
                'page' => 'required|integer',
                'order_dir' => 'required|string',
                'limit' => 'required|integer'
            ]);

            $response = Http::withHeaders($headers)->post($this->baseUrl .'api/v1/costs', [
                'page' => $data['page'],
                'order_dir' => $data['order_dir'],
                'limit' => $data['limit']
            ]);

            return json_decode($response->getBody());
        } catch (ClientException $e) {
            return response()->json(json_decode($e->getResponse()->getBody(), true), $e->getResponse()->getStatusCode());
        }
    }
}
