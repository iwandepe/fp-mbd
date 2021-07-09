<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact(['employees']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
        ]);

        Employee::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'title' => isset($request->title) ? $request->title : null,
            'title_of_courtesy' => isset($request->title_of_courtesy) ? $request->title_of_courtesy : null,
            'birth_date' => isset($request->birth_date) ? $request->birth_date : null,
            'hire_date' => isset($request->hire_date) ? $request->hire_date : null,
            'address' => isset($request->address) ? $request->address : null,
            'city' => isset($request->city) ? $request->city : null,
            'region' => isset($request->region) ? $request->region : null,
            'postal_code' => isset($request->postal_code) ? $request->postal_code : null,
            'country' => isset($request->country) ? $request->country : null,
            'home_phone' => isset($request->home_phone) ? $request->home_phone : null,
            'extension' => isset($request->extension) ? $request->extension : null,
            'photo' => isset($request->photo) ? $request->photo : null,
            'notes' => isset($request->notes) ? $request->notes : null,
            'reports_to' => isset($request->reports_to) ? $request->reports_to : null,
            'photo_path' => isset($request->photo_path) ? $request->photo_path : null,
        ]);

        return redirect('/employee');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
        ]);

        Employee::where('employee_id', $id)
            ->update([
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'title' => isset($request->title) ? $request->title : null,
                'title_of_courtesy' => isset($request->title_of_courtesy) ? $request->title_of_courtesy : null,
                'birth_date' => isset($request->birth_date) ? $request->birth_date : null,
                'hire_date' => isset($request->hire_date) ? $request->hire_date : null,
                'address' => isset($request->address) ? $request->address : null,
                'city' => isset($request->city) ? $request->city : null,
                'region' => isset($request->region) ? $request->region : null,
                'postal_code' => isset($request->postal_code) ? $request->postal_code : null,
                'country' => isset($request->country) ? $request->country : null,
                'home_phone' => isset($request->home_phone) ? $request->home_phone : null,
                'extension' => isset($request->extension) ? $request->extension : null,
                'photo' => isset($request->photo) ? $request->photo : null,
                'notes' => isset($request->notes) ? $request->notes : null,
                'reports_to' => isset($request->reports_to) ? $request->reports_to : null,
                'photo_path' => isset($request->photo_path) ? $request->photo_path : null,
            ]);

        return redirect('/employee');
    }

    public function destroy($id)
    {
        Employee::where('employee_id', '=', $id)->first()->delete();

        return redirect('/employee');
    }

    public function edit($id)
    {
        $employee = Employee::where('employee_id', $id)->first();
        return view('employee.edit', compact(['employee']));
    }

    public function add()
    {
        return view('employee.add');
    }
}
