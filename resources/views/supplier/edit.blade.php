@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Edit Data Supplier</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/supplier/{{$supplier->supplier_id}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="supplier_id" class="form-control-label">Supplier id</label>
                            <input class="form-control" type="number" value="{{$supplier->supplier_id}}" id="supplier_id">
                        </div>
                        <div class="form-group">
                            <label for="company_name" class="form-control-label">Company Name</label>
                            <input class="form-control" type="text" value="{{$supplier->company_name}}" id="company_name">
                        </div>
                        <div class="form-group">
                            <label for="contact_name" class="form-control-label">Contact Name</label>
                            <input class="form-control" type="text" value="{{$supplier->contact_name}}" id="contact_name">
                        </div>
                        <div class="form-group">
                            <label for="contact_title" class="form-control-label">Contact Title</label>
                            <input class="form-control" type="text" value="{{$supplier->contact_title}}" id="contact_title">
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-control-label">Address</label>
                            <input class="form-control" type="text" value="{{$supplier->address}}" id="address">
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-control-label">City</label>
                            <input class="form-control" type="text" value="{{$supplier->city}}" id="city">
                        </div>
                        <div class="form-group">
                            <label for="region" class="form-control-label">Region</label>
                            <input class="form-control" type="number" value="{{$supplier->region}}" id="region">
                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="form-control-label">Postal Code</label>
                            <input class="form-control" type="text" value="{{$supplier->postal_code}}" id="postal_code">
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-control-label">Country</label>
                            <input class="form-control" type="text" value="{{$supplier->country}}" id="country">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-control-label">Phone</label>
                            <input class="form-control" type="text" value="{{$supplier->phone}}" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="fax" class="form-control-label">Fax</label>
                            <input class="form-control" type="text" value="{{$supplier->fax}}" id="fax">
                        </div>
                        <div class="form-group">
                            <label for="homepage" class="form-control-label">Homepage</label>
                            <input class="form-control" type="text" value="{{$supplier->homepage}}" id="homepage">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
