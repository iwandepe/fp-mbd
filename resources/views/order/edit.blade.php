@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Edit Data Employee</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/order/{{$order->order_id}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="customer_id" class="form-control-label">Customer id</label>
                            <input class="form-control" type="text" value="{{$order->customer_id}}" id="customer_id" name="customer_id">
                        </div>
                        <div class="form-group">
                            <label for="employee_id" class="form-control-label">Employee id</label>
                            <input class="form-control" type="number" value="{{$order->employee_id}}" id="employee_id" name="employee_id">
                        </div>
                        <div class="form-group">
                            <label for="order_date" class="form-control-label">Order Date</label>
                            <input class="form-control" type="date" value="{{$order->order_date}}" id="order_date" name="order_date">
                        </div>
                        <div class="form-group">
                            <label for="required_date" class="form-control-label">Required Date</label>
                            <input class="form-control" type="date" value="{{$order->required_date}}" id="required_date" name="required_date">
                        </div>
                        <div class="form-group">
                            <label for="shipped_date" class="form-control-label">Shipped Date</label>
                            <input class="form-control" type="date" value="{{$order->shipped_date}}" id="shipped_date" name="shipped_date">
                        </div>
                        <div class="form-group">
                            <label for="ship_via" class="form-control-label">Shipper id</label>
                            <input class="form-control" type="number" value="{{$order->ship_via}}" id="ship_via" name="ship_via">
                        </div>
                        <div class="form-group">
                            <label for="freight" class="form-control-label">Freight</label>
                            <input class="form-control" type="text" value="{{$order->freight}}" id="freight" name="freight">
                        </div>
                        <div class="form-group">
                            <label for="ship_address" class="form-control-label">Ship Address</label>
                            <input class="form-control" type="text" value="{{$order->ship_address}}" id="ship_address" name="ship_address">
                        </div>
                        <div class="form-group">
                            <label for="ship_name" class="form-control-label">Ship Name</label>
                            <input class="form-control" type="text" value="{{$order->ship_name}}" id="ship_name" name="ship_name">
                        </div>
                        <div class="form-group">
                            <label for="ship_city" class="form-control-label">Ship City</label>
                            <input class="form-control" type="text" value="{{$order->ship_city}}" id="ship_city" name="ship_city">
                        </div>
                        <div class="form-group">
                            <label for="ship_region" class="form-control-label">Ship Region</label>
                            <input class="form-control" type="text" value="{{$order->ship_region}}" id="ship_region" name="ship_region">
                        </div>
                        <div class="form-group">
                            <label for="ship_postal_code" class="form-control-label">Ship Postal Code</label>
                            <input class="form-control" type="number" value="{{$order->ship_postal_code}}" id="ship_postal_code" name="ship_postal_code">
                        </div>
                        <div class="form-group">
                            <label for="ship_country" class="form-control-label">Ship Country</label>
                            <input class="form-control" type="text" value="{{$order->ship_country}}" id="ship_country" name="ship_country">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
