<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/checkout', function () {
  // Replace sk_test_xxx with your key.
  \Stripe\Stripe::setApiKey('sk_test_xxx');

    $session = \Stripe\Checkout\Session::create([
      'payment_method_types' => ['card'],
      'line_items' => [[
        'name' => 'T-shirt',
        'description' => 'Comfortable cotton t-shirt',
        'images' => ['https://example.com/t-shirt.png'],
        'amount' => 500,
        'currency' => 'usd',
        'quantity' => 1,
      ]],
      'success_url' => 'https://example.com/success',
      'cancel_url' => 'https://example.com/cancel',
    ]);

    return View::make('checkout')->with('session_id', $session->id);
});
