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
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Supplier Id</th>
                            <th>Category Id</th>
                            <th>Quantity Per Unit</th>
                            <th>Unit Price</th>
                            <th>Unit in Stock</th>
                            <th>Unit on Order</th>
                            <th>Reorder Level</th>
                            <th>Discontinued</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($products as $product)
                            <tr>
                                <td class="product_id">
                                    {{$product->product_id}}
                                </td>
                                <td class="product_name">
                                    {{$product->product_name}}
                                </td>
                                <td class="supplier_id">
                                    {{$product->supplier_id}}
                                </td>
                                <td class="category_id">
                                    {{$product->category_id}}
                                </td>
                                <td class="quantity_per_unit">
                                    {{$product->quantity_per_unit}}
                                </td>
                                <td class="unit_price">
                                    {{$product->unit_price}}
                                </td>
                                <td class="units_in_stock">
                                    {{$product->units_in_stock}}
                                </td>
                                <td class="units_in_order">
                                    {{$product->units_on_order}}
                                </td>
                                <td class="reorder_level">
                                    {{$product->reorder_level}}
                                </td>
                                <td class="discontinued">
                                    {{$product->discontinued}}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item text-primary pr-2" href="/product/{{$product->product_id}}/edit">
                                                Edit
                                            </a>
                                            <a class="dropdown-item text-danger" href="/product/{{$product->product_id}}/delete" data-toggle="modal" data-target="#deleteModal{{$product->product_id}}">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <div class="modal fade" id="deleteModal{{$product->product_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form action="/product/{{$product->product_id}}" method="POST">
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
