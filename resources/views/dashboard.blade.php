@extends('layouts.app')

@section('card-stats')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Employee</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $employee }}</span>
                        </div>
                        <!-- <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="fa fa user f-left"></i>
                            </div>
                        </div> -->
                    </div>
                    <!-- <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $employee }}</span>
                        <span class="text-nowrap">SEE MORE</span>
                    </p> -->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Customer</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $customer }}</span>
                        </div>
                        <!-- <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="fa fa user f-left"></i>
                            </div>
                        </div> -->
                    </div>
                    <!-- <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $customer }}</span>
                        <span class="text-nowrap">SEE MORE</span>
                    </p> -->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Order</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $order }}</span>
                        </div>
                        <!-- <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-money-coins"></i>
                            </div>
                        </div> -->
                    </div>
                    <!-- <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $order }}</span>
                        <span class="text-nowrap">SEE MORE</span>
                    </p> -->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Product Terjual</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $product }}</span>
                        </div>
                        <!-- <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="ni ni-money-coins"></i>
                            </div>
                        </div> -->
                    </div>
                    <!-- <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $product }}</span>
                        <span class="text-nowrap">SEE MORE </span>
                    </p> -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Order Amount By City</h3>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">City</th>
                            <th scope="col">Order Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cities as $key=>$city)
                        <tr>
                            <td scope="row">
                                {{$city->ship_city}}
                            </td>
                            <td>
                                {{$orderAmountByCityList[$key]}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Amount Order By Year</h3>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Year</th>
                            <th scope="col">Order Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($amountOrderPerYears as $amountOrderPerYear)
                        <tr>
                            <th scope="row">
                                {{$amountOrderPerYear->yyyy}}
                            </th>
                            <td>
                                {{$amountOrderPerYear->order_amount}}
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
