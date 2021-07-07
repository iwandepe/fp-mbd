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
                    <form method="POST" enctype="multipart/form-data" action="/employee/{{$employee->employee_id}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="first_name" class="form-control-label">First Name</label>
                            <input class="form-control" type="text" value="{{$employee->first_name}}" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="form-control-label">Last Name</label>
                            <input class="form-control" type="text" value="{{$employee->last_name}}" id="last_name" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="title" class="form-control-label">Title</label>
                            <input class="form-control" type="text" value="{{$employee->title}}" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="title_of_courtesy" class="form-control-label">Title Of Courtesy</label>
                            <input class="form-control" type="text" value="{{$employee->title_of_courtesy}}" id="last_name" name="title_of_courtesy">
                        </div>
                        <div class="form-group">
                            <label for="birth_date" class="form-control-label">Birth Date</label>
                            <input class="form-control" type="date" value="{{$employee->birth_date}}" id="birth_date" name="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="hire_date" class="form-control-label">Hire Date</label>
                            <input class="form-control" type="date" value="{{$employee->hire_date}}" id="hire_date" name="hire_date">
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-control-label">Address</label>
                            <input class="form-control" type="text" value="{{$employee->address}}" id="address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-control-label">City</label>
                            <input class="form-control" type="text" value="{{$employee->city}}" id="city" name="city">
                        </div>
                        <div class="form-group">
                            <label for="region" class="form-control-label">Region</label>
                            <input class="form-control" type="text" value="{{$employee->region}}" id="region" name="region">
                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="form-control-label">Postal Code</label>
                            <input class="form-control" type="number" value="{{$employee->postal_code}}" id="postal_code" name="postal_code">
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-control-label">Country</label>
                            <input class="form-control" type="text" value="{{$employee->country}}" id="country" name="country">
                        </div>
                        <div class="form-group">
                            <label for="home_phone" class="form-control-label">Home Phone</label>
                            <input class="form-control" type="number" value="{{$employee->home_phone}}" id="home_phone" name="home_phone">
                        </div>
                        <div class="form-group">
                            <label for="extension" class="form-control-label">Extension</label>
                            <input class="form-control" type="text" value="{{$employee->extension}}" id="extension" name="extension">
                        </div>
                        <div class="form-group">
                            <label for="photo" class="form-control-label">Photo</label>
                            <input class="form-control" type="text" value="" id="photo" name="photo">
                        </div>
                        <div class="form-group">
                            <label for="notes" class="form-control-label">Notes</label>
                            <input class="form-control" type="text" value="{{$employee->notes}}" id="notes" name="notes">
                        </div>
                        <div class="form-group">
                            <label for="reports_to" class="form-control-label">Reports_to</label>
                            <input class="form-control" type="number" value="{{$employee->reports_to}}" id="reports_to" name="reports_to">
                        </div>
                        <div class="form-group">
                            <label for="photo_path" class="form-control-label">Photo Path</label>
                            <input class="form-control" type="text" value="{{$employee->photo_path}}" id="photo_path" name="photo_path">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
