<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class departmentController extends Controller
{
    //
    function store(Request $req) {
        $department = new Department();
        $department->name = $req->name;
        $department->description = $req->description;
        $department->status = $req->status;
        $department->save();
        return redirect('/admin/department');
    }

    function view() {
        $data = Department::all();
        return view('Departments.department', ['data' => $data]);
    }

    function editView($id) {
        $data = Department::find($id);
        return view('Departments.editDepartment', ['data' => $data]);
    }

    function edit(Request $req) {
        $id = $req->ID;
        $department = Department::where("ID", "=", $id)->update(
            [
                "name" => $req->name,
                "description" => $req->description,
                "status" => $req->status,
            ]
        );
        return redirect('/admin/department');
    }

    function delete($id) {
        Department::where("ID", "=", $id)->delete();
        return redirect('/admin/department');
    }
}
