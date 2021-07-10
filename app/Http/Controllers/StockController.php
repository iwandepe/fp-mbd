<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class StockController extends Controller
{
    public function index(){
        // $bonuses = Bonus::get();
        
        $stocks = DB::select("SELECT * FROM log_stock WHERE status_stock = 'Needs to be Restocked' ");
        return view('log-stock', compact(['stocks']));
    }

    public function callStock(){

        $stocks = DB::select("CALL cek_stok()");
        return redirect('/stock');
    }
}
