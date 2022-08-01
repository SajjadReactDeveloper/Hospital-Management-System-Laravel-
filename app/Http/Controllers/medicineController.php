<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class medicineController extends Controller
{
    //
    function store(Request $req) {
        $medicine = new Medicine();
        $medicine->name = $req->name;
        $medicine->date = $req->date;
        $medicine->price = $req->price;
        $medicine->quantity = $req->quantity;
        $medicine->alert = $req->alert;
        $medicine->status = $req->status;
        $medicine->usages = $req->usages;
        $medicine->save();
        return redirect('/admin/medicine');
    }

    function view() {
        $data = Medicine::all();
        return view('Medicine.medicine', ['data' => $data]);
    }

    function editView($id) {
        $data = Medicine::find($id);
        return view('Medicine.editMedicine', ['data' => $data]);
    }

    function edit(Request $req) {
        $id = $req->id;
        $medicine = Medicine::where("ID", "=", $id)->update(
            [
                "date" => $req->date,
                "name" => $req->name,
                "price" => $req->price,
                "quantity" => $req->quantity,
                "alert" => $req->alert,
                "usages" => $req->usages,
                "status" => $req->status,
            ]
        );
        return redirect('/admin/medicine');
    }

    function delete($id) {
        Medicine::where("ID", "=", $id)->delete();
        return redirect('/admin/medicine');
    }
}
