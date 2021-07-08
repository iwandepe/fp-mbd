<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact(['customers']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'company_name' => 'required',
            'contact_name' => 'required',
            'contact_title' => 'required',
            'address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'fax' => 'required'
        ]);

        Customer::create($request->all());

        return redirect('/customer');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required',
            'company_name' => 'required',
            'contact_name' => 'required',
            'contact_title' => 'required',
            'address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'fax' => 'required'
        ]);

        Customer::where('customer_id', $id)
            ->update([
                'customer_id' => $request->customer_id,
                'company_name' => $request->company_name,
                'contact_name' => $request->contact_name,
                'contact_title' => $request->contact_title,
                'address' => $request->address,
                'city' => $request->city,
                'region' => $request->region,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'phone' => $request->phone,
                'fax' => $request->fax
            ]);

        return redirect('/customer');
    }

    public function destroy($id)
    {
        Customer::where('customer_id', '=' ,$id)->first()->delete();

        return redirect('/customer');
    }

    public function edit($id)
    {
        $customer = customer::where('customer_id', $id)->first();
        return view('customer.edit', compact(['customer']));
    }

    public function add()
    {
        return view('customer.add');
    }
}
