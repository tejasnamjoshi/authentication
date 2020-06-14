<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function index()
    {
        return view('payments.index');
    }

    public function store()
    {
        // request()->user()->notify(new PaymentReceived(900));
        // return redirect('/payments/create');

        // process payment
        // unlock purchase
        ProductPurchased::dispatch('toy');

        // listeners
        // notify user
        // award acheievements
        // send sharable coupon
    }
}
