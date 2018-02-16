<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class PageController extends Controller
{
    public function main()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(3);

        return view('pages.main')->withOrders($orders);
    }
}
