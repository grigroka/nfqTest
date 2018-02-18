<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Purifier;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Order $order)
    {
        $orders = $order->sortable(['created_at' => 'desc'])->paginate(10);
        return view('orders.index')->withOrders($orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Validate data.
        $this->validate($request, [
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'required|string|email',
            'details' => 'required'
        ]);
//        Store in the DB.
        $order = new Order;

        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->email = $request->email;
        $order->details = Purifier::clean($request->details);

        $order->save();

        Session::flash('success', 'Order was successfully placed!');

//        Redirect.
        return redirect()->route('orders.show', $order->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show')->withOrder($order);
    }
//    Search orders.

    public function search(Request $request, Order $order)
    {
        $this->validate($request, [
            'search' => 'required|max:191'
        ]);
        $query = $request->search;
        $results = $order->sortable()->where('first_name', 'LIKE', '%' . $query . '%')->orWhere('last_name', 'LIKE', '%' . $query .'%')->orWhere('email', 'LIKE', '%' . $query .'%')->orWhere('details', 'LIKE', '%' . $query . '%')->orWhere('id', 'LIKE', $query)->paginate(10);
        return view('orders.search')->withResults($results)->withQuery($query);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
