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

        OrderDetail::create($request->all());

        return redirect('/order_detail');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'unit_price' => 'required',
            'quantity' => 'required',
            'discount' => 'required'
        ]);

        OrderDetail::where('product_id', $id)
            ->update([
                'unit_price' => $request->product_name,
                'quantity' => $request->supplier_id,
                'discount' => $request->category_id,
            ]);

        return redirect('/order_detail');
    }

    public function destroy($id)
    {
        OrderDetail::where('product_id', '=' ,$id)->first()->delete();

        return redirect('/order_detail');
    }

    public function edit($id)
    {
        $order_detail = OrderDetail::where('product_id', $id)->first();
        return view('order_detail.edit', compact(['order_detail']));
    }

    public function add()
    {
        return view('order_detail.add');
    }
}
