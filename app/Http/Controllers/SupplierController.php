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
            'supplier_id' => 'required',
            'company_name' => 'required',
            'contact_name' => 'required',
            'contact_title' => 'required',
            'address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'homepage' => 'required'
        ]);

        Supplier::create($request->all());

        return redirect('/supplier');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_id' => 'required',
            'company_name' => 'required',
            'contact_name' => 'required',
            'contact_title' => 'required',
            'address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'homepage' => 'required'
        ]);

        Supplier::where('supplier_id', $id)
            ->update([
                'supplier_id' => $request->supplier_id,
                'company_name' => $request->company_name,
                'contact_name' => $request->contact_name,
                'contact_title' => $request->contact_title,
                'address' => $request->address,
                'city' => $request->city,
                'region' => $request->region,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'phone' => $request->phone,
                'fax' => $request->fax,
                'homepage' => $request->homepage
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
