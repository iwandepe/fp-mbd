<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class ReportController extends Controller
{
    public function salesHistory() {

        if (isset($_GET['start']) && isset($_GET['end'])) {
            $start = $_GET['start'];
            $end = $_GET['end'];

            $histories = DB::select("SELECT * FROM sales_by_year('{$start}', '{$end}')");

            return view('sales-history', compact(['histories']));
        }

        return view('sales-history');
    }

    public function salesHistoryPost(Request $request) {
        if (isset($request->start) && isset($request->end)) {
            $start = $request->start;
            $end = $request->end;

            $histories = DB::select("SELECT * FROM sales_by_year('{$start}', '{$end}')");

            return redirect()->route('sales-history')->with(['histories' => $histories]);
        }

        return back();
    }
}
