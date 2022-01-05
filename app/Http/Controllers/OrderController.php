<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('order.index-dashboard', compact('orders'));
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
            'name_product' => $request->name_product,
            'quantity_product' => $request->quantity_product,
            'address_product' => $request->address_product,
            'description_product' => $request->description_product,
        ]);
        Alert::success('Success', 'Your order will we confirm 2x24, please check your email');

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        // $data = Order::find($request->id);
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->no_handphone = $request->no_handphone;
        // $data->name_product = $request->name_product;
        // $data->quantity_product = $request->quantity_product;
        // $data->address_product = $request->address_product;
        // $data->description_product = $request->description_product;

        // $data->save();

        Order::where('id', $order->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_handphone' => $request->no_handphone,
                'name_product' => $request->name_product,
                'quantity_product' => $request->quantity_product,
                'address_product' => $request->address_product,
                'description_product' => $request->description_product,
            ]);

        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, Request $request)
    {
        $order = $request->get('id', $order->id);
        // TODO: Check for validation
        $orderDelete = DB::select('select ' . $order . ' from orders');
        $orderDelete->delete();
        return redirect('order');
    }

    public function getDataOrder($id)
    {
        $user = Auth::user();
        $product = Product::find($id);
        return view('order.index-home', compact('user', 'product'));
    }
}
