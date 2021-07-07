<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

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
        return view('employee.index');
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

        return view('employee.index');
    }

    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();
        return back();
    }

    public function edit($id)
    {
        return view('employee.edit.blade.php');
    }

    public function add()
    {
        return view('employee.add');
    }
}
