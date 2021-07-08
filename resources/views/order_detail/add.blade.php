@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Create New Order Detail</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/order_detail/form">
                        @csrf
                        <div class="form-group">
                            <label for="unit_price" class="form-control-label">Unit Price</label>
                            <input class="form-control" type="number" value="" id="unit_price">
                            @if ($errors->has('unit_price'))
                                <span class="text-danger">{{ $errors->first('unit_price') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="form-control-label">Quantity</label>
                            <input class="form-control" type="number" value="" id="quantity">
                            @if ($errors->has('quantity'))
                                <span class="text-danger">{{ $errors->first('quantity') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="discount" class="form-control-label">Discount</label>
                            <input class="form-control" type="number" value="" id="discount">
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
