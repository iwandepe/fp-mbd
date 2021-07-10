@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="my-auto">Total Price of Order {{$totalOrder[0]->order_id}}</h3>
                        </div>
                        {{-- <h4>Product amount is {{$totalOrder[0]->total}}</h4> --}}
                    </div>
                </div>

                <div class="mb-4 ml-4">
                    <form class="form-inline" role="form" method="POST" action="/order/{{$totalOrder[0]->order_id}}/total">
                        @csrf
                        
                        <button class="btn btn-primary" type="submit">Get Additional Discount</button>
                    </form>
                </div>

                <!-- Light table -->
                <div class="table-responsive">
                    <table id="" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>Order_ID</th>
                            <th>Total Price</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        {{-- @foreach ($orderDetail as $product) --}}
                            <tr>
                                <td class="order_id">
                                    {{$totalOrder[0]->order_id}}
                                </td>
                            
                                <td class="totalOrder">
                                    {{$totalOrder[0]->total}}
                                </td>
                            </tr>
                        {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
