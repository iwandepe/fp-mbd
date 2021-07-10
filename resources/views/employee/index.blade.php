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
                            <th scope="col" class="sort" data-sort="first_name">First Name</th>
                            <th scope="col" class="sort" data-sort="last_name">Last Name</th>
                            <th scope="col" class="sort" data-sort="title">Title</th>
                            <th scope="col" class="sort" data-sort="title_of_courtesy">Title of courtesy</th>
                            <th scope="col" class="sort" data-sort="birth_date">Birth Date</th>
                            <th scope="col" class="sort" data-sort="hire_date">Hire Date</th>
                            <th scope="col" class="sort" data-sort="address">Addres</th>
                            <th scope="col" class="sort" data-sort="city">City</th>
                            <th scope="col" class="sort" data-sort="region">Region</th>
                            <th scope="col" class="sort" data-sort="postal_code">Postal Code</th>
                            <th scope="col" class="sort" data-sort="country">Country</th>
                            <th scope="col" class="sort" data-sort="home_phone">Phone</th>
                            <th scope="col" class="sort" data-sort="extension">Extension</th>
                            <th scope="col" class="sort" data-sort="photo">photo</th>
                            <th scope="col" class="sort" data-sort="reports_to">Reports To</th>
                            <th scope="col" class="sort" data-sort="photo_path">Photo Path</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($employees as $employee)
                            <tr>
                                <td class="first_name">
                                {{$employee->first_name}}
                                </td>
                                <td class="last_name">
                                    {{$employee->last_name}}
                                </td>
                                <td class="title">
                                    {{$employee->title}}
                                </td>
                                <td class="title-of-courtesy">
                                    {{$employee->title_of_courtesy}}
                                </td>
                                <td class="birth_date">
                                    {{$employee->birth_date}}
                                </td>
                                <td class="hire_date">
                                    {{$employee->hire_date}}
                                </td>
                                <td class="address">
                                    {{$employee->address}}
                                </td>
                                <td class="city">
                                    {{$employee->city}}
                                </td>
                                <td class="region">
                                    {{$employee->region}}
                                </td>
                                <td class="postal_code">
                                    {{$employee->postal_code}}
                                </td>
                                <td class="country">
                                    {{$employee->country}}
                                </td>
                                <td class="home_phone">
                                    {{$employee->home_phone}}
                                </td>
                                <td class="extension">
                                    {{$employee->extension}}
                                </td>
                                <td class="photo">
{{--                                    <img src="data:{{$employee->photo}}" alt="">--}}
                                </td>
                                <td class="reports_to">
                                    {{$employee->reports_to}}
                                </td>
                                <td class="photo_path">
                                    <img src="{{$employee->photo_path}}" alt="">
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow pl-5">
                                            <a class="dropdown-item text-primary pr-2" data-toggle="modal" data-target="#detailsModal{{$employee->employee_id}}" >
                                                Details
                                            </a>
                                            <a href="/employee/{{$employee->employee_id}}/edit" class="dropdown-item text-primary pr-2" >
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <div class="modal fade" id="detailsModal{{$employee->employee_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Details of employee {{$employee->first_name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                                                    <div class="col-sm-10">
                                                        <textarea type="text" height="4" readonly class="form-control-plaintext" id="notes" rows="10">{{$employee->notes}}</textarea>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
