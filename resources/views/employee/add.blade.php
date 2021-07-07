@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Add New Employee</h3>
                </div>
                <div class="form ml-4 mr-4">
                    <form method="POST" enctype="multipart/form-data" action="/employee">
                        @csrf
                        <div class="form-group">
                            <label for="first_name" class="form-control-label">First Name</label>
                            <input class="form-control" type="text" value="{{old('first_name')}}" id="first_name" name="first_name">
                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="form-control-label">Last Name</label>
                            <input class="form-control" type="text" value="{{old('last_name')}}" id="last_name" name="last_name">
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title" class="form-control-label">Title</label>
                            <input class="form-control" type="text" value="{{old('title')}}" id="title" name="title">
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title_of_courtesy" class="form-control-label">Title Of Courtesy</label>
                            <input class="form-control" type="text" value="{{old('last_name')}}" id="last_name" name="title_of_courtesy">
                            @if ($errors->has('title_of_courtesy'))
                                <span class="text-danger">{{ $errors->first('title_of_courtesy') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="birth_date" class="form-control-label">Birth Date</label>
                            <input class="form-control" type="date" value="{{old('birth_date')}}" id="birth_date" name="birth_date">
                            @if ($errors->has('birth_date'))
                                <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="hire_date" class="form-control-label">Hire Date</label>
                            <input class="form-control" type="date" value="{{old('hire_date')}}" id="hire_date" name="hire_date">
                            @if ($errors->has('hire_date'))
                                <span class="text-danger">{{ $errors->first('hire_date') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-control-label">Address</label>
                            <input class="form-control" type="text" value="{{old('address')}}" id="address" name="address">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-control-label">City</label>
                            <input class="form-control" type="text" value="{{old('city')}}" id="city" name="city">
                            @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="region" class="form-control-label">Region</label>
                            <input class="form-control" type="text" value="{{old('region')}}" id="region" name="region">
                            @if ($errors->has('region'))
                                <span class="text-danger">{{ $errors->first('region') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="form-control-label">Postal Code</label>
                            <input class="form-control" type="number" value="{{old('postal_code')}}" id="postal_code" name="postal_code">
                            @if ($errors->has('postal_code'))
                                <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-control-label">Country</label>
                            <input class="form-control" type="text" value="{{old('country')}}" id="country" name="country">
                            @if ($errors->has('country'))
                                <span class="text-danger">{{ $errors->first('country') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="home_phone" class="form-control-label">Home Phone</label>
                            <input class="form-control" type="number" value="{{old('home_phone')}}" id="home_phone" name="home_phone">
                            @if ($errors->has('home_phone'))
                                <span class="text-danger">{{ $errors->first('home_phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="extension" class="form-control-label">Extension</label>
                            <input class="form-control" type="text" value="{{old('extension')}}" id="extension" name="extension">
                            @if ($errors->has('extension'))
                                <span class="text-danger">{{ $errors->first('extension') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="photo" class="form-control-label">Photo</label>
                            <input class="form-control" type="text" value="{{old('photo')}}" id="photo" name="photo">
                            @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="notes" class="form-control-label">Notes</label>
                            <input class="form-control" type="text" value="{{old('notes')}}" id="notes" name="notes">
                            @if ($errors->has('notes'))
                                <span class="text-danger">{{ $errors->first('notes') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="reports_to" class="form-control-label">Reports_to</label>
                            <input class="form-control" type="number" value="{{old('reports_to')}}" id="reports_to" name="reports_to">
                            @if ($errors->has('reports_to'))
                                <span class="text-danger">{{ $errors->first('reports_to') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="photo_path" class="form-control-label">Photo Path</label>
                            <input class="form-control" type="text" value="{{old('photo_path')}}" id="photo_path" name="photo_path">
                            @if ($errors->has('photo_path'))
                                <span class="text-danger">{{ $errors->first('photo_path') }}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
