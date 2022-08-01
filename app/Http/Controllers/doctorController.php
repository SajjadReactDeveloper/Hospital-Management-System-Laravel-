<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\Department;
use App\Models\Appointment;
use App\Models\Patient;

class doctorController extends Controller
{
    //
    function addView() {
        $data = Specialist::all();
        $data1 = Department::all();
        return view('Doctor.addDoctor', ['data' => $data, 'data1' => $data1]);
    }

    function getDoctors() {
        $doctors = Doctor::all();
        $doctorsCount = Doctor::count();
        $patientsCount = Patient::count();
        $appointments = Appointment::all();
        $appointmentsCount = Appointment::where('status', '=', 'Active')->count();
        $appointmentsCounts = Appointment::where('status', '=', 'Inactive')->count();
        $patients = Patient::all();
        return view('Dashboard.home', ['data' => $doctors, 'data1' => $appointments, 'data2' => $patients, 'data3' => $doctorsCount, 'data4' => $patientsCount, 'data5' => $appointmentsCount, 'data6' => $appointmentsCounts]);
    }

    function store(Request $req) {
        $doctor = new Doctor();
        $doctor->name = $req->name;
        $doctor->email = $req->email;
        $doctor->username = $req->username;
        $doctor->degree = $req->degree;
        $doctor->date = $req->date;
        $doctor->gender = $req->gender;
        $doctor->specialist = $req->specialist;
        $doctor->department = $req->department;
        $doctor->charges = $req->charges;
        $doctor->country = $req->country;
        $doctor->address = $req->address;
        $doctor->phone = $req->phone;
        $doctor->biography = $req->biography;
        $doctor->status = $req->status;
        $doctor->image = $req->file('image')->store('docs');
        $doctor->save();
        return redirect('/admin/doctor');
    }

    function view() {
        $data = Doctor::all();
        return view ('Doctor.doctor', ['data' => $data]);
    }

    function editView(Request $req) {
        $id = $req->id;
        $data = Doctor::find($id);
        $data1 = Specialist::all();
        $data2 = Department::all();
        return view('Doctor.editDoctor', ['data' => $data, 'data1' => $data1, 'data2' => $data2]);
    }

    function edit(Request $req) {
        $id = $req->ID;
        $doctor = Doctor::where("ID", "=", $id)->update(
            [
                "name" => $req->name,
                "email" => $req->email,
                "username" => $req->username,
                "degree" => $req->degree,
                "date" => $req->date,
                "gender" => $req->gender,
                "specialist" => $req->specialist,
                "department" => $req->department,
                "charges" => $req->charges,
                "country" => $req->country,
                "address" => $req->address,
                "phone" => $req->phone,
                "biography" => $req->biography,
                "status" => $req->status,
                "image" => $req->file('image')->store('docs')
            ]
        );
        return redirect('/admin/doctor');
    }

    function delete($id) {
        $doctor = Doctor::where("ID", "=", $id)->delete();
        return redirect('/admin/doctor');
    }
}
