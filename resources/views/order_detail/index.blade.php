@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="my-auto">Products</h3>
                            <div class="ml-auto m-0">
                                <a href="/product/add" class="btn btn-primary m-0">Create New Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>Order Id</th>
                            <th>Product Id</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>discount</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($order_details as $order_detail)
                            <tr>
                                <td class="order_id">
                                    {{$order_detail->order_id}}
                                </td>
                                <td class="product_id">
                                    {{$order_detail->product_id}}
                                </td>
                                <td class="unit_price">
                                    {{$order_detail->unit_price}}
                                </td>
                                <td class="quantity">
                                    {{$order_detail->quantity}}
                                </td>
                                <td class="discount">
                                    {{$order_detail->discount}}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item text-primary pr-2" href="/order_detail/{{$order_detail->product_id}}/edit">
                                                Edit
                                            </a>
                                            <a class="dropdown-item text-danger" href="/order_detail/{{$order_detail->product_id}}/delete" data-toggle="modal" data-target="#deleteModal{{$order_detail->product_id}}">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <div class="modal fade" id="deleteModal{{$order_detail->product_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form action="/order_detail/{{$order_detail->product_id}}" method="POST">
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
