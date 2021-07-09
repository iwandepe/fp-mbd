@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Create New Customer</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/customer">
                        @csrf
                        <div class="form-group">
                            <label for="customer_id" class="form-control-label">Customer id</label>
                            <input class="form-control" type="text" value="" id="customer_id" name="customer_id">
                            @if ($errors->has('customer_id'))
                                <span class="text-danger">{{ $errors->first('customer_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="company_name" class="form-control-label">Company Name</label>
                            <input class="form-control" type="text" value="" id="company_name" name="company_name">
                            @if ($errors->has('company_name'))
                                <span class="text-danger">{{ $errors->first('company_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="contact_name" class="form-control-label">Contact Name</label>
                            <input class="form-control" type="text" value="" id="contact_name" name="contact_name">
                            @if ($errors->has('contact_name'))
                                <span class="text-danger">{{ $errors->first('contact_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="contact_title" class="form-control-label">Contact Title</label>
                            <input class="form-control" type="text" value="" id="contact_title" name="contact_title">
                            @if ($errors->has('contact_title'))
                                <span class="text-danger">{{ $errors->first('contact_title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-control-label">Address</label>
                            <input class="form-control" type="text" value="" id="address" name="address">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-control-label">City</label>
                            <input class="form-control" type="text" value="" id="city" name="city">
                            @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="region" class="form-control-label">Region</label>
                            <input class="form-control" type="text" value="" id="region" name="region">
                            @if ($errors->has('region'))
                                <span class="text-danger">{{ $errors->first('region') }}</span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="form-control-label">Postal Code</label>
                            <input class="form-control" type="text" value="" id="postal_code" name="postal_code">
                            @if ($errors->has('postal_code'))
                                <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-control-label">Country</label>
                            <input class="form-control" type="text" value="" id="country" name="country">
                            @if ($errors->has('country'))
                                <span class="text-danger">{{ $errors->first('country') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-control-label">Phone</label>
                            <input class="form-control" type="text" value="" id="phone" name="phone">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="fax" class="form-control-label">Fax</label>
                            <input class="form-control" type="text" value="" id="fax" name="fax">
                            @if ($errors->has('fax'))
                                <span class="text-danger">{{ $errors->first('fax') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
