@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="my-auto">Orders</h3>
                            <div class="ml-auto m-0">
                                <a href="/order/add" class="btn btn-primary m-0">Create New Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>Order id</th>
                            <th>Customer id</th>
                            <th>Employee id</th>
                            <th>Order Date</th>
                            <th>Required Date</th>
                            <th>Shipped Date</th>
                            <th>Ship Via</th>
                            <th>Freight</th>
                            <th>Ship Name</th>
                            <th>Ship Address</th>
                            <th>Ship City</th>
                            <th>Ship Region</th>
                            <th>Ship Postal Code</th>
                            <th>Ship Country</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($orders as $order)
                            <tr>
                                <td class="order_id">
                                    {{$order->order_id}}
                                </td>
                                <td class="customeer_id">
                                    {{$order->customer_id}}
                                </td>
                                <td class="employee_id">
                                    {{$order->employee_id}}
                                </td>
                                <td class="order_date">
                                    {{$order->order_date}}
                                </td>
                                <td class="required_date">
                                    {{$order->required_date}}
                                </td>
                                <td class="shipped_date">
                                    {{$order->shipped_date}}
                                </td>
                                <td class="ship_via">
                                    {{$order->ship_via}}
                                </td>
                                <td class="freight">
                                    {{$order->freight}}
                                </td>
                                <td class="ship_name">
                                    {{$order->ship_name}}
                                </td>
                                <td class="ship_address">
                                    {{$order->ship_address}}
                                </td>
                                <td class="ship_city">
                                    {{$order->ship_city}}
                                </td>
                                <td class="ship_region">
                                    {{$order->ship_region}}
                                </td>
                                <td class="ship_postal_code">
                                    {{$order->ship_postal_code}}
                                </td>
                                <td class="ship_country">
                                    {{$order->ship_country}}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item text-primary pr-2" href="/order/{{$order->order_id}}/edit">
                                                Edit
                                            </a>
                                            <a class="dropdown-item text-danger" href="/order/{{$order->order_id}}/delete" data-toggle="modal" data-target="#deleteModal{{$order->order_id}}">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <div class="modal fade" id="deleteModal{{$order->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form action="/order/{{$order->order_id}}" method="POST">
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
