<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Doctor;

class scheduleController extends Controller
{
    //
    function addView() {
        $data = Doctor::all();
        return view('DoctorSchedule.addSchedule', ['data' => $data]);
    }

    function store(Request $req) {
        $schedule = new Schedule();
        $schedule->dName = $req->dName;
        $schedule->day = $req->day;
        $schedule->startTime = $req->startTime;
        $schedule->endTime = $req->endTime;
        $schedule->status = $req->status;
        $schedule->message = $req->message;
        $schedule->save();
        return redirect('/admin/doctor/schedule');
    }

    function view() {
        $data = Schedule::all();
        return view('DoctorSchedule.schedule', ['data' => $data]);
    }

    function editView($id) {
        $data = Schedule::find($id);
        $data1 = Doctor::all();
        return view('DoctorSchedule.editSchedule', ['data' => $data, 'data1' => $data1]);
    }

    function edit(Request $req) {
        $id = $req->ID;
        $schedule = Schedule::where("ID", "=", $id)->update(
            [
                "dName" => $req->dName,
                "day" => $req->day,
                "startTime" => $req->startTime,
                "endTime" => $req->endTime,
                "status" => $req->status,
                "message" => $req->message
            ]
        );
        return redirect('/admin/doctor/schedule');
    }

    function delete($id) {
        Schedule::where("ID", "=", $id)->delete();
        return redirect('/admin/doctor/schedule');
    }
}
