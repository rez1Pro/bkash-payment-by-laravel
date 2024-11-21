<?php

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

    // Your bKash app key from merchant portal
    'app_key' => env('LARA_BKASH_APP_KEY', ''),

    // Your bKash app secret from merchant portal
    'app_secret' => env('LARA_BKASH_APP_SECRET', ''),

    // Your bKash username/user ID from merchant portal
    'user_id' => env('LARA_BKASH_USER_ID', ''),

    // Your bKash password from merchant portal
    'user_password' => env('LARA_BKASH_USER_PASSWORD', ''),

    // Payment environment - can be 'sandbox' for testing or 'live' for production
    'mode' => env('LARA_BKASH_MODE', 'sandbox'),

    'url' => env('LARA_BKASH_URL', 'https://checkout.sandbox.bka.sh/v1.2.0-beta/checkout/payment/create'),
];
