@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Add New Order Detail</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/order_detail">
                        @csrf
                        <div class="form-group">
                            <label for="order_id" class="form-control-label">Order Id</label>
                            <input class="form-control" type="number" value="{{old('order_id')}}" id="order_id" name="order_id">
                            @if ($errors->has('order_id'))
                                <span class="text-danger">{{ $errors->first('order_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="product_id" class="form-control-label">Product Id</label>
                            <input class="form-control" type="number" value="{{old('product_id')}}" id="product_id" name="product_id">
                            @if ($errors->has('product_id'))
                                <span class="text-danger">{{ $errors->first('product_id') }}</span>
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
                            <label for="quantity" class="form-control-label">Quantity</label>
                            <input class="form-control" type="number" value="{{old('quantity')}}" id="quantity" name="quantity">
                            @if ($errors->has('quantity'))
                                <span class="text-danger">{{ $errors->first('quantity') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="discount" class="form-control-label">Discount</label>
                            <input class="form-control" type="number" value="{{old('discount')}}" id="discount" name="discount">
                            @if ($errors->has('discount'))
                                <span class="text-danger">{{ $errors->first('discount') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
