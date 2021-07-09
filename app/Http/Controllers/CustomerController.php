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
            'company_name' => 'required'
            // 'contact_name' => 'required',
            // 'contact_title' => 'required',
            // 'address' => 'required',
            // 'city' => 'required',
            // 'region' => 'required',
            // 'postal_code' => 'required',
            // 'country' => 'required',
            // 'phone' => 'required',
            // 'fax' => 'required'
        ]);

        // Customer::create($request->all());
        Customer::create([
            'customer_id' => $request->customer_id,
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
        ]);

        return redirect('/customer');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'customer_id' => 'required',
            'company_name' => 'required',
            // 'contact_name' => 'required',
            // 'contact_title' => 'required',
            // 'address' => 'required',
            // 'city' => 'required',
            // 'region' => 'required',
            // 'postal_code' => 'required',
            // 'country' => 'required',
            // 'phone' => 'required',
            // 'fax' => 'required'
        ]);

        Customer::where('customer_id', $id)
            ->update([
                'customer_id' => $request->customer_id,
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
