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
                        <div class="form-group">
                            <label for="customer_id" class="form-control-label">Customer id</label>
                            <input class="form-control" type="number" value="" id="customer_id">
                        </div>
                        <div class="form-group">
                            <label for="employee_id" class="form-control-label">Employee id</label>
                            <input class="form-control" type="number" value="" id="employee_id">
                        </div>
                        <div class="form-group">
                            <label for="order_date" class="form-control-label">Order Date</label>
                            <input class="form-control" type="datetime-local" value="" id="order_date">
                        </div>
                        <div class="form-group">
                            <label for="required_date" class="form-control-label">Required Date</label>
                            <input class="form-control" type="datetime-local" value="" id="required_date">
                        </div>
                        <div class="form-group">
                            <label for="shipped_date" class="form-control-label">Shipped Date</label>
                            <input class="form-control" type="datetime-local" value="" id="shipped_date">
                        </div>
                        <div class="form-group">
                            <label for="ship_via" class="form-control-label">Shipper id</label>
                            <input class="form-control" type="number" value="" id="ship_via">
                        </div>
                        <div class="form-group">
                            <label for="freight" class="form-control-label">Freight</label>
                            <input class="form-control" type="number" value="" id="freight">
                        </div>
                        <div class="form-group">
                            <label for="ship_name" class="form-control-label">Ship Name</label>
                            <input class="form-control" type="text" value="" id="ship_name">
                        </div>
                        <div class="form-group">
                            <label for="ship_address" class="form-control-label">Ship Addres</label>
                            <input class="form-control" type="text" value="" id="ship_address">
                        </div>
                        <div class="form-group">
                            <label for="ship_city" class="form-control-label">Ship City</label>
                            <input class="form-control" type="text" value="" id="ship_city">
                        </div>
                        <div class="form-group">
                            <label for="ship_region" class="form-control-label">Ship Region</label>
                            <input class="form-control" type="text" value="" id="ship_region">
                        </div>
                        <div class="form-group">
                            <label for="ship_postal_code" class="form-control-label">Ship Postal Code</label>
                            <input class="form-control" type="text" value="" id="ship_postal_code">
                        </div>
                        <div class="form-group">
                            <label for="ship_country" class="form-control-label">Ship Country</label>
                            <input class="form-control" type="text" value="" id="ship_country">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
