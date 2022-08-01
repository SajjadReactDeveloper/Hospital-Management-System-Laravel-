<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacy;
use App\Models\Officer;

class pharmacyController extends Controller
{
    //
    function addView() {
        $data1 = Officer::all();
        return view('Pharmacies.addPharmacies', ['data1' => $data1]);
    }

    function store(Request $req) {
        $Pharmacy = new Pharmacy();
        $Pharmacy->name = $req->name;
        $Pharmacy->phone = $req->phone;
        $Pharmacy->holder = $req->holder;
        $Pharmacy->address = $req->address;
        $Pharmacy->status = $req->status;
        $Pharmacy->officer = $req->officer;
        $Pharmacy->save();
        return redirect('/admin/pharmacy');
    }

    function view() {
        $data = Pharmacy::all();
        return view('Pharmacies.pharmacies', ['data' => $data]);
    }

    function editView(Request $req) {
        $id = $req->id;
        $data = Pharmacy::find($id);
        $data1 = Officer::all();
        return view('Pharmacies.editPharmacy', ['data' => $data, 'data1' => $data1]);
    }

    function edit(Request $req) {
        $id = $req->ID;
        $Pharmacy = Pharmacy::where("ID", "=", $id)->update(
            [
                "name" => $req->name,
                "holder" => $req->holder,
                "address" => $req->address,
                "phone" => $req->phone,
                "officer" => $req->officer,
                "status" => $req->status,
            ]
        );
        return redirect('/admin/pharmacy');
    }

    function delete($id) {
        Pharmacy::where("ID", "=", $id)->delete();
        return redirect('/admin/pharmacy');
    }
}
