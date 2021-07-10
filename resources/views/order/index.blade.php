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
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>Order id</th>
                            <th>Customer id</th>
                            <th>Employee id</th>
                            <th>Order Date</th>
                            <th>Ship Address</th>
                            <th>Ship City</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($orders as $key=>$order)
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
                                <td class="ship_address">
                                    {{$order->ship_address}}
                                </td>
                                <td class="ship_city">
                                    {{$order->ship_city}}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item text-primary" data-toggle="modal" data-target="#details{{$order->order_id}}">
                                                Details
                                            </a>
                                            <a class="dropdown-item text-primary" href="/order/{{$order->order_id}}/total">
                                                Check Total Price
                                            </a>
                                            <a class="dropdown-item text-primary pr-2" href="/order/{{$order->order_id}}/edit">
                                                Edit
                                            </a>
                                            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#deleteModal{{$order->order_id}}">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <div class="modal fade" id="details{{$order->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Required Date</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->required_date}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Shipped Date</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->shipped_date}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Ship Via</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->ship_via}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Freight</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->freight}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Ship Name</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->ship_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Ship Address</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->ship_address}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Ship City</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->ship_city}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Ship Region</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->ship_region}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Ship Postal Code</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->ship_postal_code}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Ship Country</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$order->ship_country}}">
                                                        </div>
                                                    </div>
                                                    @foreach ($orderDetailList[$key] as $key=>$product)
                                                    <h3>Detail Product {{$key}} </h3>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Product Name</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$product->product_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Unit Price</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$product->unit_price}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Quantity</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$product->quantity}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="notes" class="col-4 col-form-label">Discount</label>
                                                        <div class="col-8">
                                                            <input type="text" readonly class="form-control-plaintext" value="{{$product->discount}}">
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="deleteModal{{$order->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Are you sure?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <form action="/order/{{$order->order_id}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Yes, delete data</button>
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
