<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloqquent\Builder;

class DashboardController extends Controller
{
    public function index() {
        $cities = DB::select("SELECT DISTINCT ship_city FROM orders; ");

        $orderAmountByCityList = [];

        foreach($cities as $city) {
            $result = DB::select("SELECT order_amount_by_city('{$city->ship_city}')");
            array_push($orderAmountByCityList, $result[0]->order_amount_by_city);
        }

        $amountOrderPerYears = DB::select('
                        select extract(year from order_date) as yyyy,
                        count(*) as "order_amount"
                        from orders
                        group by yyyy
                        ');

        
        $employee = DB::table('employees')->count();
        $customer = DB::table('customers')->count();
        $order = DB::table('orders')->count();
        $product= DB::table('order_details')->sum('quantity');

        return view('dashboard', compact([
            'cities', 
            'orderAmountByCityList', 
            'product', 
            'customer', 
            'order', 
            'employee', 
            'amountOrderPerYears'
        ]));

    }
}
