@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Create New Order</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/order/form">
                        @csrf
                        <div class="form-group">
                            <label for="customer_id" class="form-control-label">Customer id</label>
                            <input class="form-control" type="number" value="" id="customer_id">
                            @if ($errors->has('customer_id'))
                                <span class="text-danger">{{ $errors->first('customer_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="employee_id" class="form-control-label">Employee id</label>
                            <input class="form-control" type="number" value="" id="employee_id">
                            @if ($errors->has('employee_id'))
                                <span class="text-danger">{{ $errors->first('employee_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="order_date" class="form-control-label">Order Date</label>
                            <input class="form-control" type="datetime-local" value="" id="order_date">
                            @if ($errors->has('order_date'))
                                <span class="text-danger">{{ $errors->first('order_date') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="required_date" class="form-control-label">Required Date</label>
                            <input class="form-control" type="datetime-local" value="" id="required_date">
                            @if ($errors->has('required_date'))
                                <span class="text-danger">{{ $errors->first('required_date') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="shipped_date" class="form-control-label">Shipped Date</label>
                            <input class="form-control" type="datetime-local" value="" id="shipped_date">
                            @if ($errors->has('shipped_date'))
                                <span class="text-danger">{{ $errors->first('shipped_date') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="ship_via" class="form-control-label">Shipper id</label>
                            <input class="form-control" type="number" value="" id="ship_via">
                            @if ($errors->has('ship_via'))
                                <span class="text-danger">{{ $errors->first('ship_via') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="freight" class="form-control-label">Freight</label>
                            <input class="form-control" type="number" value="" id="freight">
                            @if ($errors->has('freight'))
                                <span class="text-danger">{{ $errors->first('freight') }}</span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="ship_name" class="form-control-label">Ship Name</label>
                            <input class="form-control" type="text" value="" id="ship_name">
                            @if ($errors->has('ship_name'))
                                <span class="text-danger">{{ $errors->first('ship_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="ship_address" class="form-control-label">Ship Addres</label>
                            <input class="form-control" type="text" value="" id="ship_address">
                            @if ($errors->has('ship_address'))
                                <span class="text-danger">{{ $errors->first('ship_address') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="ship_city" class="form-control-label">Ship City</label>
                            <input class="form-control" type="text" value="" id="ship_city">
                            @if ($errors->has('ship_city'))
                                <span class="text-danger">{{ $errors->first('ship_city') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="ship_region" class="form-control-label">Ship Region</label>
                            <input class="form-control" type="text" value="" id="ship_region">
                            @if ($errors->has('ship_region'))
                                <span class="text-danger">{{ $errors->first('ship_region') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="ship_postal_code" class="form-control-label">Ship Postal Code</label>
                            <input class="form-control" type="text" value="" id="ship_postal_code">
                            @if ($errors->has('ship_postal_code'))
                                <span class="text-danger">{{ $errors->first('ship_postal_code') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="ship_country" class="form-control-label">Ship Country</label>
                            <input class="form-control" type="text" value="" id="ship_country">
                            @if ($errors->has('ship_country'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
