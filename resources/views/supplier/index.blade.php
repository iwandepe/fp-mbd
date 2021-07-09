@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="my-auto">Suppliers</h3>
                            <div class="ml-auto m-0">
                                <a href="/supplier/add" class="btn btn-primary m-0">Create New Suppliers</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>Supplier id</th>
                            <th>Company Name</th>
                            <th>Contact Name</th>
                            <th>Contact Title</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Region</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                            <th>Phone</th>
                            <th>Fax</th>
                            <th>Homepage</th>

                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td class="supplier_id">
                                    {{$supplier->supplier_id}}
                                </td>
                                <td class="company_name">
                                    {{$supplier->company_name}}
                                </td>
                                <td class="contact_name">
                                    {{$supplier->contact_name}}
                                </td>
                                <td class="contact_title">
                                    {{$supplier->contact_title}}
                                </td>
                                <td class="address">
                                    {{$supplier->address}}
                                </td>
                                <td class="city">
                                    {{$supplier->city}}
                                </td>
                                <td class="region">
                                    {{$supplier->region}}
                                </td>
                                <td class="postal_code">
                                    {{$supplier->postal_code}}
                                </td>
                                <td class="country">
                                    {{$supplier->country}}
                                </td>
                                <td class="phone">
                                    {{$supplier->phone}}
                                </td>
                                <td class="fax">
                                    {{$supplier->fax}}
                                </td>
                                <td class="homepage">
                                    {{$supplier->homepage}}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item text-primary pr-2" href="/supplier/{{$supplier->supplier_id}}/edit">
                                                Edit
                                            </a>
                                            <a class="dropdown-item text-danger" href="/supplier/{{$supplier->supplier_id}}/delete" data-toggle="modal" data-target="#deleteModal{{$supplier->supplier_id}}">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <div class="modal fade" id="deleteModal{{$supplier->supplier_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form action="/supplier/{{$supplier->supplier_id}}" method="POST">
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
