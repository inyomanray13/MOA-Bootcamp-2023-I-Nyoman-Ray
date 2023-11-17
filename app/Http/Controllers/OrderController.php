<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index (){
        return view ('home');
    }

    public function checkout (Request $request){
        $request->request->add(['total_price' => $request->qty * 100000, 'status' => 'Unpaid']);
        $order = Order::create($request->all());
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
        'transaction_details' => array(
        'order_id' => $order->id,
        'gross_amount' => $order->total_price,
        ),
        'customer_details' => array(
        'name' => $request->name,
        'phone' => $request->phone,
        ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('checkout', compact('snapToken', 'order'));
    }
    public function job (){

        $data = Order::all();
        
        return view('jobmanagement', compact('data'));

    }

    public function tambahjob (){
        return view('tambahjob');
    }

    public function insertdata(Request $request){
        Order::create($request->all());
        return redirect()->route('job');
    }

    public function tampilkandata($id){
        $data = Order::find($id);
        //dd($data);

        return view('tampildata', compact('data'));

    }

    public function updatedata(Request $request, $id){
        $data = Order::find($id);
        $data->update($request->all());

        return redirect()->route('job');
    }

    public function delete($id){
        $data = Order::find($id);
        $data->delete();
        return redirect()->route('job');

    }
}
