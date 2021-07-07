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
            'title' => 'required',
            'title_of_courtesy' => 'required',
            'birth_date' => 'required',
            'hire_date' => 'required',
            'address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'home_phone' => 'required',
            'extension' => 'required',
            'photo' => 'required',
            'notes' => 'required',
            'reports_to' => 'required',
            'photo_path' => 'required'
        ]);

        Employee::create($request->all());

        $employees = Employee::get();

        return view('employee.index', compact(['employees']));
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
            'title' => 'required',
            'title_of_courtesy' => 'required',
            'birth_date' => 'required',
            'hire_date' => 'required',
            'address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'home_phone' => 'required',
            'extension' => 'required',
            'photo' => 'required',
            'notes' => 'required',
            'reports_to' => 'required',
            'photo_path' => 'required'
        ]);

        Employee::where('employee_id', $id)
            ->update([
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'title' => $request->title,
                'title_of_courtesy' => $request->title_of_courtesy,
                'birth_date' => $request->birth_date,
                'hire_date' => $request->hire_date,
                'address' => $request->address,
                'city' => $request->city,
                'region' => $request->region,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'home_phone' => $request->home_phone,
                'extension' => $request->extension,
                'photo' => $request->photo,
                'notes' => $request->notes,
                'reports_to' => $request->reports_to,
                'photo_path' => $request->photo_path
            ]);

        return redirect('/employee');
    }

    public function destroy($id)
    {
        DB::table('employees')->where('employee_id', $id)
            ->delete();

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
