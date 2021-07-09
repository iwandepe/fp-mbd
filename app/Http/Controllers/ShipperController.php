<?php

namespace App\Http\Controllers;

use App\Models\Shipper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShipperController extends Controller
{
    public function index() {
        $shippers = Shipper::get();

        $orderAmountList = [];

        foreach ($shippers as $shipper)
        {
            $res = DB::select("SELECT shipper_order_amount({$shipper->shipper_id})");
            array_push($orderAmountList, $res[0]->shipper_order_amount);
        }

        // dd($orderAmountList);

        return view('shipper', compact(['shippers', 'orderAmountList']));
    }
}
