<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;

class patientController extends Controller
{
    //
    function addView() {
        $data = Doctor::all();
        return view('Patients.addpatient', ['data' => $data]);
    }

    function store(Request $req) {
        $patient = new Patient();
        $patient->date = $req->date;
        $patient->type = $req->type;
        $patient->name = $req->name;
        $patient->email = $req->email;
        $patient->gender = $req->gender;
        $patient->address = $req->address;
        $patient->pAddress = $req->pAddress;
        $patient->phone = $req->phone;
        $patient->home = $req->home;
        $patient->symptoms = $req->symptoms;
        $patient->dob = $req->dob;
        $patient->occupation = $req->occupation;
        $patient->bloodGroup = $req->bloodGroup;
        $patient->religion = $req->religion;
        $patient->dName = $req->dName;
        $patient->floor = $req->floor;
        $patient->image = $req->file('image')->store('docs');
        $patient->save();
        return redirect('admin/patient');
    }

    function view() {
        $result = Patient::all();
        return view('Patients.patient', ['data' => $result]);
    }

    function editView($id) {
        $data = Patient::find($id);
        $data1 = Doctor::all();
        return view('Patients.editPatient', ['data' => $data, 'data1' => $data1]);
    }

    function edit(Request $req) {
        $id = $req->ID;
        $patient = Patient::where("ID", "=", $id)->update(
            [
                "date" => $req->date,
                "type" => $req->type,
                "gender" => $req->gender,
                "name" => $req->name,
                "dob" => $req->dob,
                "occupation" => $req->occupation,
                "phone" => $req->phone,
                "home" => $req->home,
                "bloodGroup" => $req->bloodGroup,
                "address" => $req->address,
                "religion" => $req->religion,
                "pAddress" => $req->pAddress,
                "dName" => $req->dName,
                "floor" => $req->floor,
                "symptoms" => $req->symptoms,
                "email" => $req->email,
                "image" => $req->file('image')->store('docs')
            ]
        );
        return redirect('/admin/patient');
    }

    function delete($id) {
        Patient::where('ID', '=', $id)->delete();
        return redirect('/admin/patient');
    }
}
