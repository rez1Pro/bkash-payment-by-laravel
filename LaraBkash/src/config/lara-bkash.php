<?php

/**
 * bKash Payment Gateway Configuration
 *
 * Here you can configure your bKash payment gateway credentials.
 * These values should be obtained from your bKash merchant account.
 */

$mode = env('LARA_BKASH_MODE', 'sandbox');
$apiVersion = env('LARA_BKASH_API_VERSION', 'v1.2.0-beta');
return [
    /*
    |--------------------------------------------------------------------------
    | bKash Payment Gateway Configuration
    |--------------------------------------------------------------------------
    |
    | Here you can configure your bKash payment gateway credentials.
    | These values should be obtained from your bKash merchant account.
    |
    */

    /* bKash API Version */
    'bkash_api_version' => $apiVersion,

    /* Your bKash app key from merchant portal */
    'app_key' => env('LARA_BKASH_APP_KEY', ''),

    /* Your bKash app secret from merchant portal */
    'app_secret' => env('LARA_BKASH_APP_SECRET', ''),

    /* Your bKash username/user ID from merchant portal */
    'username' => env('LARA_BKASH_USERNAME', ''),

    /* Your bKash password from merchant portal */
    'password' => env('LARA_BKASH_USER_PASSWORD', ''),

    /* bKash API URL */
    'base_url' => $mode === 'sandbox' ? 'https://tokenized.sandbox.bka.sh/' . $apiVersion : 'https://tokenized.pay.bka.sh/' . $apiVersion,

    'currency' => 'BDT',
];
