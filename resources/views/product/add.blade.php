@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Add New Product</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/product">
                        @csrf
                        <div class="form-group">
                            <label for="product_name" class="form-control-label">Product Name</label>
                            <input class="form-control" type="text" value="{{old('product_name')}}" id="product_name" name="product_name">
                            @if ($errors->has('product_name'))
                                <span class="text-danger">{{ $errors->first('product_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="supplier_id" class="form-control-label">Supplier Id</label>
                            <input class="form-control" type="number" value="{{old('supplier_id')}}" id="supplier_id" name="supplier_id">
                            @if ($errors->has('supplier_id'))
                                <span class="text-danger">{{ $errors->first('supplier_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="form-control-label">Category Id</label>
                            <input class="form-control" type="number" value="{{old('category_id')}}" id="category_id" name="category_id">
                            @if ($errors->has('category_id'))
                                <span class="text-danger">{{ $errors->first('category_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="quantity_per_unit" class="form-control-label">Quantity Per Unit</label>
                            <input class="form-control" type="text" value="{{old('quantity_per_unit')}}" id="quantity_per_unit" name="quantity_per_unit">
                            @if ($errors->has('quantity_per_unit'))
                                <span class="text-danger">{{ $errors->first('quantity_per_unit') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="unit_price" class="form-control-label">Unit Price</label>
                            <input class="form-control" type="number" value="{{old('unit_price')}}" id="unit_price" name="unit_price">
                            @if ($errors->has('unit_price'))
                                <span class="text-danger">{{ $errors->first('unit_price') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="units_in_stock" class="form-control-label">Units in Stock</label>
                            <input class="form-control" type="number" value="{{old('units_in_stock')}}" id="units_in_stock" name="units_in_stock">
                            @if ($errors->has('units_in_stock'))
                                <span class="text-danger">{{ $errors->first('units_in_stock') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="units_on_order" class="form-control-label">Units on Order</label>
                            <input class="form-control" type="number" value="{{old('units_on_order')}}" id="units_on_order" name="units_on_order">
                            @if ($errors->has('units_on_order'))
                                <span class="text-danger">{{ $errors->first('units_on_order') }}</span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="reorder_level" class="form-control-label">Reorder Level</label>
                            <input class="form-control" type="number" value="{{old('reorder_level')}}" id="reorder_level" name="reorder_level">
                            @if ($errors->has('reorder_level'))
                                <span class="text-danger">{{ $errors->first('reorder_level') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="discontinued" class="form-control-label">Discontinued</label>
                            <input class="form-control" type="number" value="{{old('discontinued')}}" id="discontinued" name="discontinued">
                            @if ($errors->has('discontinued'))
                                <span class="text-danger">{{ $errors->first('discontinued') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
