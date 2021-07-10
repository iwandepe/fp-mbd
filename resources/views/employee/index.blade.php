@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="my-auto">Employee</h3>
                            <div class="ml-auto m-0">
                                <a href="/employee/add" class="btn btn-primary m-0">Add New Employee</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush the-table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="first_name">Name</th>
                            <th scope="col" class="sort" data-sort="title">Title</th>
                            <th scope="col" class="sort" data-sort="birth_date">Birth Date</th>
                            <th scope="col" class="sort" data-sort="address">Addres</th>
                            <th scope="col" class="sort" data-sort="city">City</th>
                            <th scope="col" class="sort" data-sort="home_phone">Phone</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($employees as $employee)
                            <tr>
                                <td class="first_name">
                                {{$employee->title_of_courtesy}} {{$employee->first_name}} {{$employee->last_name}}
                                </td>
                                <td class="title">
                                    {{$employee->title}}
                                </td>
                                <td class="birth_date">
                                    {{$employee->birth_date}}
                                </td>
                                <td class="address">
                                    {{$employee->address}}
                                </td>
                                <td class="city">
                                    {{$employee->city}}
                                </td>
                                <td class="home_phone">
                                    {{$employee->home_phone}}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item text-primary" data-toggle="modal" data-target="#details{{$employee->employee_id}}">
                                                Details
                                            </a>
                                            <a class="dropdown-item text-primary pr-2" href="/employee/{{$employee->employee_id}}/edit">
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <div class="modal fade" id="details{{$employee->employee_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Employee Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">First Name</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->first_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Last Name</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->last_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Title</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->title}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Title of Courtesy</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->title_of_courtesy}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Birth Date</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->birth_date}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Hire Date</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->hire_date}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Address</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->address}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">City</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->city}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Region</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->region}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Postal Code</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->postal_code}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Country</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->country}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Phone</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->home_phone}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Extension</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->extension}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Reports to</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$employee->reports_to}}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
