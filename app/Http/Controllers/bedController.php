<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bed;

class bedController extends Controller
{
    //
    function store(Request $req) {
        $bed = new Bed();
        $bed->no = $req->no;
        $bed->floor = $req->floor;
        $bed->rent = $req->rent;
        $bed->room = $req->room;
        $bed->status = $req->status;
        $bed->type = $req->type;
        $bed->image = $req->file('image')->store('Docs');
        $bed->save();
        return redirect('/admin/inventory/bed');
    }

    function view() {
        $data = Bed::all();
        return view('Inventory.Beds.beds', ['data' => $data]);
    }

    function editView($id) {
        $data = Bed::find($id);
        return view('Inventory.Beds.editBed', ['data' => $data]);
    }

    function edit(Request $req) {
        $id = $req->ID;
        $bed = Bed::where("ID", "=", $id)->update(
            [
                "no" => $req->no,
                "floor" => $req->floor,
                "rent" => $req->rent,
                "type" => $req->type,
                "room" => $req->room,
                "status" => $req->status,
                "image" => $req->file('image')->store('docs')
            ]
        );
        return redirect('/admin/inventory/bed');
    }

    function delete($id) {
        Bed::where("ID", "=", $id)->delete();
        return redirect('/admin/inventory/bed');
    }
}
