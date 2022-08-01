<?php

namespace App\Http\Controllers;
use App\Models\Specialist;

use Illuminate\Http\Request;

class specialistController extends Controller
{
    //
    function store(Request $req) {
        $specialist = new Specialist();
        $specialist->name = $req->name;
        $specialist->save();
        return redirect('/admin/specialists');
    }

    function view() {
        $data = Specialist::all();
        return view('Specialists.specialist', ['data' => $data]);
    }

    function editView(Request $req) {
        $id = $req->id;
        $data = Specialist::find($id);
        return view('Specialists.editSpecialist', ['data' => $data]);
    }

    function edit(Request $req) {
        $id = $req->id;
        $data = Specialist::find($id);
        $data->name = $req->name;
        $data->save();
        return redirect('/admin/specialists');
    }

    function delete($id) {
        $data = Specialist::find($id);
        $data->delete();
        return redirect('/admin/specialists');
    }
}
