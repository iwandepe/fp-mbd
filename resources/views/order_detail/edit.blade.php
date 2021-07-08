@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Edit Data Order Detail</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/order_detail/{{$order_detail->product_id}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="unit_price" class="form-control-label">Unit Price</label>
                            <input class="form-control" type="number" value="{{$order_detail->unit_price}}" id="unit_price" name="unit_price">
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="form-control-label">Quantity</label>
                            <input class="form-control" type="number" value="{{$order_detail->quantity}}" id="quantity" name="quantity">
                        </div>
                        <div class="form-group">
                            <label for="discount" class="form-control-label">Discount</label>
                            <input class="form-control" type="number" value="{{$order_detail->discount}}" id="discount" name="discount">
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
