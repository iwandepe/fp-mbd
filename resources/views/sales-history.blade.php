<?php $histories = Session::get('histories'); ?>

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="my-auto">Sales history by time</h3>
                        </div>
                    </div>
                </div>
                <!-- Light table -->

                <div class="mb-4 ml-4">
                    <form class="form-inline" role="form" method="POST" action="/sales-history">
                        @csrf
                        <div class="form-group mr-4">
                            <label for="begin_date">Begin Date:</label>
                            <input type="date" class="form-control" id="begin_date" placeholder="Start Date" name="start">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date:</label>
                            <input type="date" class="form-control" id="end_date" placeholder="End Date" name="end">
                        </div>
                        
                        <button class="btn btn-primary" type="submit">Find</button>
                    </form>
                </div>

                @if(isset($histories))
                <div class="table-responsive">
                    <table id="" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>Order id</th>
                            <th>Shipped date</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($histories as $history)
                            <tr>
                                <td class="order_id">
                                    {{$history->order_id}}
                                </td>
                                <td class="shipped_date">
                                    {{$history->shipped_date}}
                                </td>
                                <td class="total">
                                    {{$history->total}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
