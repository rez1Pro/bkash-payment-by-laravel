<?php

namespace Rez1pro\LaraBkash\Core;

use GuzzleHttp\Client;

class Index
{

    protected $response;
    public function __construct()
    {
        $client = new Client();
        $this->response = $client->request('POST', 'https://checkout.sandbox.bka.sh/v1.2.0-beta/checkout/payment/create', [
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
        ]);
    }

    public function index()
    {
        // dd("hello world");
        dd(config('lara-bkash.app_key'));
    }
}
