<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderDetailController extends Controller
{
    public function index()
    {
        $order_details = OrderDetail::all();
        //dd($order_details);
        return view('order_detail.index', compact(['order_details']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'unit_price' => 'required',
            'quantity' => 'required',
            'discount' => 'required'
        ]);

        // OrderDetail::create([
        //     'order_id' => $request->order_id,
        //     'product_id' => $request->product_id,
        //     'unit_price' => $request->unit_price,
        //     'quantity' => $request->quantity,
        //     'discount' => $request->discount
        // ]);

        $query = 'INSERT INTO order_details VALUES('
            .$request->order_id.', '
            .$request->product_id.', \''
            .$request->unit_price.'\', \''
            .$request->quantity.'\', \''
            .$request->discount.'\');';
        
        \DB::statement($query);
        return redirect('/order_detail');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $order_id, $product_id)
    {
        $request->validate([
            'unit_price' => 'required',
            'quantity' => 'required',
            'discount' => 'required'
        ]);

        OrderDetail::where('product_id', $product_id)
        ->where('order_id', $order_id)
            ->update([
                'unit_price' => $request->unit_price,
                'quantity' => $request->quantity,
                'discount' => $request->discount,
            ]);

        return redirect('/order_detail');
    }

    public function destroy($order_id, $product_id)
    {
        OrderDetail::where('product_id', '=' ,$product_id)
        ->where('order_id', '=' ,$order_id)->delete();

        return redirect('/order_detail');
    }

    public function edit($order_id, $product_id)
    {
        $order_detail = OrderDetail::where('product_id', $product_id)
        ->where('order_id', $order_id)->first();
        return view('order_detail.edit', compact(['order_detail']));
    }

    public function add()
    {
        return view('order_detail.add');
    }
}
