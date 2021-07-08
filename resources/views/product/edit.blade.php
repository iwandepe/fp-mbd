@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Edit Data Product</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/product/{{$product->product_id}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="product_name" class="form-control-label">Product Name</label>
                            <input class="form-control" type="text" value="{{$product->product_name}}" id="product_name" name="product_name">
                        </div>
                        <div class="form-group">
                            <label for="supplier_id" class="form-control-label">Supplier Id</label>
                            <input class="form-control" type="number" value="{{$product->supplier_id}}" id="supplier_id" name="supplier_id">
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="form-control-label">Category Id</label>
                            <input class="form-control" type="number" value="{{$product->category_id}}" id="category_id" name="category_id">
                        </div>
                        <div class="form-group">
                            <label for="quantity_per_unit" class="form-control-label">Quantity Per Unit</label>
                            <input class="form-control" type="text" value="{{$product->quantity_per_unit}}" id="quantity_per_unit" name="quantity_per_unit">
                        </div>
                        <div class="form-group">
                            <label for="unit_in_stock" class="form-control-label">Unit in Stock</label>
                            <input class="form-control" type="number" value="{{$product->unit_in_stock}}" id="unit_in_stock" name="unit_in_stock">
                        </div>
                        <div class="form-group">
                            <label for="unit_on_order" class="form-control-label">Unit on Order</label>
                            <input class="form-control" type="number" value="{{$product->unit_on_order}}" id="unit_on_order" name="unit_on_order">
                        </div>
                        <div class="form-group">
                            <label for="reorder_level" class="form-control-label">Reorder Level</label>
                            <input class="form-control" type="number" value="{{$product->reorder_level}}" id="reorder_level" name="reorder_level">
                        </div>
                        <div class="form-group">
                            <label for="discontinued" class="form-control-label">Discontinued</label>
                            <input class="form-control" type="number" value="{{$product->discontinued}}" id="discontinued" name="discontinued">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
