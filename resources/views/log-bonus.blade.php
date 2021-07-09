@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="my-auto">Employee Bonus</h3>
                        </div>
                    </div>
                </div>
                <!-- Light table -->

                <div class="mb-4 ml-4">
                    <form class="form-inline" role="form" method="POST" action="/bonus">
                        @csrf
                        <div class="form-group mr-4">
                            <label for="jml_sales">Jumlah Sales:</label>
                            <input type="number" class="form-control" id="jml_sales" placeholder="Jumlah Sales" name="jml_sales">
                        </div>
                        <div class="form-group">
                            <label for="jml_bonus">Jumlah Bonus:</label>
                            <input type="number" class="form-control" id="jml_bonus" placeholder="Jumlah Bonus" name="jml_bonus">
                        </div>
                        
                        <button class="btn btn-primary" type="submit">CALL</button>
                    </form>
                </div>

                {{-- @if(isset($bonuses)) --}}
                <div class="table-responsive">
                    <table id="" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>Employee ID</th>
                            {{-- <th>Employee Name</th> --}}
                            <th>Bonus</th>
                            {{-- <th>Total</th> --}}
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($bonuses as $bonus)
                            <tr>
                                <td class="employee_id">
                                    {{$bonus->employee_id}}
                                </td>
                                <td class="employee_name">
                                    {{$bonus->first_name}}
                                    {{$bonus->last_name}}

                                </td>
                                <td class="bonus">
                                    {{$bonus->bonus}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- @endif --}}
            </div>
        </div>
    </div>
@endsection
