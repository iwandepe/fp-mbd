<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact(['products']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'supplier_id' => 'required',
            'category_id' => 'required',
            'quantity_per_unit' => 'required',
            'unit_price' => 'required',
            'units_in_stock' => 'required',
            'units_on_order' => 'required',
            'reorder_level' => 'required',
            'discontinued' => 'required'
        ]);

        Productr::create($request->all());

        return redirect('/product');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'supplier_id' => 'required',
            'category_id' => 'required',
            'quantity_per_unit' => 'required',
            'unit_price' => 'required',
            'units_in_stock' => 'required',
            'units_on_order' => 'required',
            'reorder_level' => 'required',
            'discontinued' => 'required'
        ]);

        Product::where('product_id', $id)
            ->update([
                'product_name' => $request->product_name,
                'supplier_id' => $request->supplier_id,
                'category_id' => $request->category_id,
                'quantity_per_unit' => $request->quantity_per_unit,
                'unit_price' => $request->unit_price,
                'units_in_stock' => $request->units_in_stock,
                'units_on_order' => $request->units_on_order,
                'reorder_level' => $request->reorder_level,
                'discontinued' => $request->discontinued,
            ]);

        return redirect('/product');
    }

    public function destroy($id)
    {
        Product::where('product_id', '=' ,$id)->first()->delete();

        return redirect('/product');
    }

    public function edit($id)
    {
        $product = product::where('product_id', $id)->first();
        return view('product.edit', compact(['product']));
    }

    public function add()
    {
        return view('product.add');
    }
}
