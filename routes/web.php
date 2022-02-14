<?php

Route::group(['namespace' => 'Tec\Paystack\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::get('paystack/payment/callback', [
        'as'   => 'paystack.payment.callback',
        'uses' => 'PaystackController@getPaymentStatus',
    ]);
});
