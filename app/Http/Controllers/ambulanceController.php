<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambulance;

class ambulanceController extends Controller
{
    //
    function store (Request $req) {
        $ambulance = new Ambulance();
        $ambulance->id = $req->id;
        $ambulance->name = $req->name;
        $ambulance->number = $req->number;
        $ambulance->type = $req->type;
        $ambulance->image =  $req->file('image')->store('docs');
        $ambulance->status =  $req->status;
        $ambulance->save();
        return redirect('/admin/ambulance');
    }

    function view () {
        $ambulance = Ambulance::all();
        return view('Ambulance.ambulance', ["res" => $ambulance]);
    }

    function editView($id) {
        $data = Ambulance::find($id);
        return view('Ambulance.editAmbulance', ['data' => $data]);
    }

    function edit(Request $req) {
        $id = $req->id;
        $ambulance = Ambulance::where("id", "=", $id)->update(
            [
                "name" => $req->name,
                "number" => $req->number,
                "type" => $req->type,
                "image" => $req->file('image')->store('docs'),
                "status" => $req->status,
            ]
        );
        return redirect('/admin/ambulance');
    }

    function delete($id) {
        Ambulance::where("id", "=", $id)->delete();
        return redirect('/admin/ambulance');
    }
}
