<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact(['suppliers']));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'supplier_id' => 'required',
            'company_name' => 'required'
        ]);

        Supplier::create([
            'company_name' => $request->company_name,
            'contact_name' => isset($request->contact_name) ? $request->contact_name : null,
            'contact_title' => isset($request->contact_title) ? $request->contact_title : null,
            'address' => isset($request->address) ? $request->address : null,
            'city' => isset($request->city) ? $request->city : null,
            'region' => isset($request->region) ? $request->region : null,
            'postal_code' => isset($request->postal_code) ? $request->postal_code : null,
            'country' => isset($request->country) ? $request->country : null,
            'phone' => isset($request->phone) ? $request->phone : null,
            'fax' => isset($request->fax) ? $request->fax : null,
            'homepage' => isset($request->homepage) ? $request->homepage : null
        ]);

        return redirect('/supplier');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'supplier_id' => 'required',
            'company_name' => 'required'
        ]);

        Supplier::where('supplier_id', $id)
            ->update([
            'company_name' => $request->company_name,
            'contact_name' => isset($request->contact_name) ? $request->contact_name : null,
            'contact_title' => isset($request->contact_title) ? $request->contact_title : null,
            'address' => isset($request->address) ? $request->address : null,
            'city' => isset($request->city) ? $request->city : null,
            'region' => isset($request->region) ? $request->region : null,
            'postal_code' => isset($request->postal_code) ? $request->postal_code : null,
            'country' => isset($request->country) ? $request->country : null,
            'phone' => isset($request->phone) ? $request->phone : null,
            'fax' => isset($request->fax) ? $request->fax : null,
            'homepage' => isset($request->homepage) ? $request->homepage : null
            ]);

        return redirect('/supplier');
    }

    public function destroy($id)
    {
        Supplier::where('supplier_id', '=' ,$id)->first()->delete();

        return redirect('/supplier');
    }

    public function edit($id)
    {
        $supplier = Supplier::where('supplier_id', $id)->first();
        return view('supplier.edit', compact(['supplier']));
    }

    public function add()
    {
        return view('supplier.add');
    }
}
