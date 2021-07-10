<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;


class BonusController extends Controller
{
    public function totalBonus(){
        // $bonuses = Bonus::get();
        
        $bonuses = DB::select("SELECT * FROM log_bonus NATURAL JOIN employees ORDER BY employee_id");
        return view('log-bonus', compact(['bonuses']));
    }

    public function callBonus(Request $request){
        $jml_sales = $request->jml_sales;
        $jml_bonus = $request ->jml_bonus;

        $bonuses = DB::select("CALL tambah_bonus({$jml_sales}, {$jml_bonus})");
        return redirect('/bonus');
    }
}
