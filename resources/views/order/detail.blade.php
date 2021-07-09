@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="my-auto">Detail order by customer id {{$order->customer_id}}</h3>
                        </div>
                        <h4>Product amount is {{$amountOfProduct[0]->orders_producst_amount}}</h4>
                    </div>
                </div>

                <!-- Light table -->
                <div class="table-responsive">
                    <table id="" class="table align-items-center table-flush">
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
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($orderDetail as $product)
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
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
