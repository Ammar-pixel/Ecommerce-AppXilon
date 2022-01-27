<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ManagerLogs;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::all();

        return view('layouts.order')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, Order $order)
    {
        //
        $order->update([
            'O_Status' =>  $request->input('O_Status'),
        ]);
        $logs=new ManagerLogs;
        $logs->Cust_Id=Auth::id();
        $logs->ML_Type=$request->input('ML_Type');
        $logs->ML_Status=$request->input('ML_Status');
        $logs->created_at=Carbon::now();
        $logs->updated_at=Carbon::now();

        $logs->save();

        return redirect()->route('order.index')->with('success', 'Order updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        $order->delete();

        return redirect()->back();
    }

    public function bookingList()
    {
        //
        $booking = Order::all();

        return view('layouts.bookinglist')->with('booking', $booking);
    }

    public function updateBooking(Request $request, $order)
    {

        //
        $orders = Order::find($order);

        $orders->update([
            'O_Status' =>  $request->input('O_Status'),
        ]);

        return redirect()->back();    }
}

