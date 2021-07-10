<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        $amountOfProductList = [];
        $orderDetailList = [];

        foreach($orders as $order) {
            $amountOfProduct = DB::select("SELECT orders_producst_amount({$order->order_id}); "); 

            $orderDetail = DB::select("
                SELECT * FROM orders
                LEFT OUTER JOIN order_details
                    ON orders.order_id = order_details.order_id
                LEFT OUTER JOIN products
                    ON order_details.product_id = products.product_id
                WHERE orders.order_id = {$order->order_id}
            ");

            array_push($amountOfProductList, $amountOfProduct);
            array_push($orderDetailList, $orderDetail);
        }

        return view('order.index', compact(['orders', 'amountOfProductList', 'orderDetailList']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'employee_id' => 'required',
            'order_date' => 'required',
            'required_date' => 'required',
            'shipped_date' => 'required',
            'ship_via' => 'required',
            'freight' => 'required',
            'ship_address' => 'required',
            'ship_city' => 'required',
            'ship_region' => 'required',
            'ship_postal_code' => 'required',
            'ship_country' => 'required'
        ]);

        Order::create($request->all());

        return redirect('/order');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required',
            'employee_id' => 'required',
            'order_date' => 'required',
            'required_date' => 'required',
            'shipped_date' => 'required',
            'ship_via' => 'required',
            'freight' => 'required',
            'ship_address' => 'required',
            'ship_city' => 'required',
            'ship_region' => 'required',
            'ship_postal_code' => 'required',
            'ship_country' => 'required'
        ]);

        Order::where('order_id', $id)
            ->update([
                'customer_id' => $request->customer_id,
                'employee_id' => $request->employee_id,
                'order_date' => $request->order_date,
                'required_date' => $request->required_date,
                'shipped_date' => $request->shipped_date,
                'ship_via' => $request->ship_via,
                'freight' => $request->freight,
                'ship_address' => $request->ship_address,
                'ship_city' => $request->ship_city,
                'ship_region' => $request->ship_region,
                'ship_postal_code' => $request->ship_postal_code,
                'ship_country' => $request->ship_country,
            ]);

        return redirect('/order');
    }

    public function destroy($id)
    {
        OrderDetail::where('order_id', '=', $id)->delete();
        DB::table('log_total_baru')->where('order_id', '=', $id)->delete();
        Order::where('order_id', '=', $id)->delete();

        return redirect('/order');
    }

    public function edit($id)
    {
        $order = order::where('order_id', $id)->first();
        return view('order.edit', compact(['order']));
    }

    public function add()
    {
        return view('order.add');
    }

    public function details($id) 
    {

        $order = Order::findOrFail($id);

        return view('order.detail', compact(['order', 'amountOfProduct','orderDetail']));
    }
}
