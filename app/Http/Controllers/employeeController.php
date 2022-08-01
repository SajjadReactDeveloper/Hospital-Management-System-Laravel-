<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeeController extends Controller
{
    //
    function store(Request $req) {
        $employee = new Employee();
        $employee->ID = $req->ID;
        $employee->name = $req->name;
        $employee->age = $req->age;
        $employee->type = $req->type;
        $employee->save();
        return redirect('/admin/employee');
    }

    function view() {
        $data = Employee::all();
        return view('Employee.employee', ['data' => $data]);
    }

    function editView($id) {
        $data = Employee::find($id);
        return view('Employee.editEmployee', ['data' => $data]);
    }

    function edit(Request $req) {
        $id = $req->ID;
        $employee = Employee::where("ID", "=", $id)->update(
            [
                "name" => $req->name,
                "age" => $req->age,
                "type" => $req->type,
            ]
        );
        return redirect('/admin/employee');
    }

    function delete($id) {
        Employee::where("ID", "=", $id)->delete();
        return redirect('/admin/employee');
    }
}
