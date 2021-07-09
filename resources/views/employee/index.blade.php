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
                    <table class="table align-items-center table-flush">
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
                            <th scope="col" class="sort" data-sort="notes">Notes</th>
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
                                <td class="notes">
                                    {{$employee->notes}}
                                </td>
                                <td class="reports_to">
                                    {{$employee->reports_to}}
                                </td>
                                <td class="photo_path">
                                    <img src="{{$employee->photo_path}}" alt="">
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow pl-5">
                                            <!-- Button trigger modal -->
                                            <a href="/employee/{{$employee->employee_id}}/edit" class="text-primary pr-2">
                                                Edit
                                            </a>
                                            <a href="/employee/{{$employee->employee_id}}/delete" data-toggle="modal" data-target="#deleteModal{{$employee->employee_id}}" class="text-danger">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{$employee->employee_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Apakah anda yakin?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <form action="/employee/{{$employee->employee_id}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Ya, hapus data</button>
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
