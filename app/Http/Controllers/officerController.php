<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officer;

class officerController extends Controller
{
    //
    function store(Request $req) {
        $officer = new Officer();
        $officer->name = $req->name;
        $officer->phone = $req->phone;
        $officer->save();
        return redirect('/admin/officer');
    }

    function view() {
        $data = Officer::all();
        return view('MarketingOfficers.officer', ['data' => $data]);
    }

    function editView($id) {
        $data = Officer::find($id);
        return view('MarketingOfficers.editOfficer', ['data' => $data]);
    }

    function edit(Request $req) {
        $id = $req->ID;
        $officer = Officer::where("ID", "=", $id)->update(
            [
                "name" => $req->name,
                "phone" => $req->phone,
            ]
        );
        return redirect('/admin/officer');
    }

    function delete($id) {
        Officer::where("ID", "=", $id)->delete();
        return redirect('/admin/officer');
    }
}
