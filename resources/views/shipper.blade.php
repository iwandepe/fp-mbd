@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="my-auto">Shipper Company List</h3>
                        </div>
                    </div>
                </div>
                <!-- Light table -->

                <div class="table-responsive">
                    <table id="" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>Company name</th>
                            <th>Phone</th>
                            <th>Total orders</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($shippers as $key=>$shipper)
                            <tr>
                                <td class="company_name">
                                    {{$shipper->company_name}}
                                </td>
                                <td class="phone">
                                    {{$shipper->phone}}
                                </td>
                                <td class="total">
                                    {{$orderAmountList[$key]}}
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
