@extends('layouts.app')

@section('content')
      <div class="row mt--5">
        <div class="col-md-10 ml-auto mr-auto">
          <div class="card card-upgrade">
            <div class="card-header text-center border-bottom-0">
              <h4 class="card-title">Argon Dashboard PRO</h4>
              <p class="card-category">Are you looking for more components? Please check our Premium Version of Argon Dashboard.</p>
            </div>
            <div class="card-body">
              <div class="table-responsive table-upgrade">
                <table class="table">
                  <thead>
                    <tr>
                      <th></th>
                      <th class="text-center">Free</th>
                      <th class="text-center">PRO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Elements</td>
                      <td class="text-center">100</td>
                      <td class="text-center">200</td>
                    </tr>
                    <tr>
                      <td>Plugins</td>
                      <td class="text-center">4</td>
                      <td class="text-center">16</td>
                    </tr>
                    <tr>
                      <td>Example Pages</td>
                      <td class="text-center">6</td>
                      <td class="text-center">25</td>
                    </tr>
                    <tr>
                      <td>DataTables, VectorMap, SweetAlert, Wizard,<br> jQueryValidation, FullCalendar etc...</td>
                      <td class="text-center"><i class="ni ni-fat-remove text-danger"></i></td>
                      <td class="text-center"><i class="ni ni-check-bold text-success"></i></td>
                    </tr>
                    <tr>
                      <td>Mini Sidebar</td>
                      <td class="text-center"><i class="ni ni-fat-remove text-danger"></i></td>
                      <td class="text-center"><i class="ni ni-check-bold text-success"></i></td>
                    </tr>
                    <tr>
                      <td>Premium Support</td>
                      <td class="text-center"><i class="ni ni-fat-remove text-danger"></i></td>
                      <td class="text-center"><i class="ni ni-check-bold text-success"></i></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td class="text-center">Free</td>
                      <td class="text-center">Just $79</td>
                    </tr>
                    <tr>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <a href="#" class="btn btn-round btn-default disabled">Current Version</a>
                      </td>
                      <td class="text-center">
                        <a target="_blank" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=ad-update-pro" class="btn btn-round btn-primary">Upgrade to PRO</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
