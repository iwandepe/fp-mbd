<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $cities = DB::select("SELECT DISTINCT ship_city FROM orders; ");

        $orderAmountByCityList = [];

        foreach($cities as $city) {
            $result = DB::select("SELECT order_amount_by_city('{$city->ship_city}')");
            array_push($orderAmountByCityList, $result[0]->order_amount_by_city);
        }

        return view('dashboard', compact(['cities', 'orderAmountByCityList']));
    }
}
