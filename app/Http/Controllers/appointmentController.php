<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Department;

use Illuminate\Http\Request;

class appointmentController extends Controller
{
    //
    function addView() {
        $data = Doctor::all();
        $data1 = Department::all();
        return view('Appointments.addapointment', ['data' => $data, 'data1' => $data1]);
    }
    function store(Request $req) {
        $appointment = new Appointment();
        $appointment->id = $req->id;
        $appointment->pName = $req->pName;
        $appointment->email = $req->email;
        $appointment->age = $req->age;
        $appointment->phone = $req->phone;
        $appointment->dName = $req->dName;
        $appointment->department = $req->department;
        $appointment->date = $req->date;
        $appointment->time = $req->time;
        $appointment->message = $req->message;
        $appointment->status = $req->status;
        $appointment->save();
        return redirect('/admin/appointment');
    }

    function view() {
        $result = Appointment::all();
        return view('Appointments.appointment', ['data' => $result]);
    }

    function editView($id) {
        $data = Appointment::find($id);
        $data1 = Doctor::all();
        $data2 = Department::all();
        return view('Appointments.editAppointment', ['data' => $data, 'data1' => $data1, 'data2' => $data2]);
    }

    function edit(Request $req) {
        $id = $req->id;
        $appointment = Appointment::where("ID", "=", $id)->update(
            [
                "pName" => $req->pName,
                "age" => $req->age,
                "dName" => $req->dName,
                "department" => $req->department,
                "date" => $req->date,
                "time" => $req->time,
                "status" => $req->status,
                "email" => $req->email,
                "phone" => $req->phone,
                "message" => $req->message
            ]
        );
        return redirect('/admin/appointment');
    }

    function delete($id) {
        Appointment::where("id", "=", $id)->delete();
        return redirect('/admin/appointment');
    }
}
