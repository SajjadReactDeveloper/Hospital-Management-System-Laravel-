<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ambulanceController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\specialistController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\scheduleController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\medicineController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\officerController;
use App\Http\Controllers\pharmacyController;
use App\Http\Controllers\stockController;
use App\Http\Controllers\bedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Authentication Route
Route::view('/admin-login', 'Auth.Login.login');
// Route::view('/admin-panel', 'Dashboard.home');
Route::get('/admin-panel', [doctorController::class, 'getDoctors']);
Route::view('/admin/profile', 'Profile.profile');
Route::view('/admin/profile/edit', 'Profile.editProfile');
Route::view('/admin/profile/setting', 'Profile.setting');

//Doctors
Route::get('/admin/doctor/add', [doctorController::class, 'addView']);
Route::view('/admin/doctor/list', 'Doctor.doctorlist');
Route::post('/addDoctors', [doctorController::class, 'store']);
Route::get('/admin/doctor', [doctorController::class, 'view']);
Route::get('/admin/doctor/edit/{id}', [doctorController::class, 'editView']);
Route::post('/editDoctors', [doctorController::class, 'edit']);
Route::get('/admin/deleteDoctor/{id}', [doctorController::class, 'delete']);

//Department
Route::view('/admin/department/add', 'Departments.addDepartment');
Route::post('/addDepartments', [departmentController::class, 'store']);
Route::get('/admin/department', [departmentController::class, 'view']);
Route::get('/admin/deleteDepartment/{id}', [departmentController::class, 'delete']);
Route::post('/editDepartment', [departmentController::class, 'edit']);
Route::get('/admin/department/edit/{id}', [departmentController::class, 'editView']);

//Specialists
Route::post('/addSpecialist', [specialistController::class, 'store']);
Route::get('/admin/specialists', [specialistController::class, 'view']);
Route::get('/admin/specialists/edit/{id}', [specialistController::class, 'editView']);
Route::post('/editSpecialist', [specialistController::class, 'edit']);
Route::get('/admin/deleteSpecialist/{id}', [specialistController::class, 'delete']);

Route::view('/notfound', 'Utils.pagenotfound');

//Beds
Route::view('/admin/inventory/bed/add', 'Inventory.Beds.addBed');
Route::post('/addBeds', [bedController::class, 'store']);
Route::get('/admin/inventory/bed', [bedController::class, 'view']);
Route::get('/admin/deleteBed/{id}', [bedController::class, 'delete']);
Route::post('/editBeds', [bedController::class, 'edit']);
Route::get('/admin/inventory/bed/edit/{id}', [bedController::class, 'editView']);

Route::view('/admin/inventory/stock/add', 'Inventory.Stocks.addStock');
Route::post('/addStocks', [stockController::class, 'store']);
Route::get('/admin/inventory/stock', [stockController::class, 'view']);
Route::get('/admin/deleteStock/{id}', [stockController::class, 'delete']);
Route::post('/editStock', [stockController::class, 'edit']);
Route::get('/admin/inventory/stock/edit/{id}', [stockController::class, 'editView']);

//Pharmacies
Route::get('/admin/pharmacy/add', [pharmacyController::class, 'addView']);
Route::post('/addPharmacy', [pharmacyController::class, 'store']);
Route::get('/admin/pharmacy', [pharmacyController::class, 'view']);
Route::get('/admin/deletePharmacy/{id}', [pharmacyController::class, 'delete']);
Route::post('/editPharmacy', [pharmacyController::class, 'edit']);
Route::get('/admin/pharmacy/edit/{id}', [pharmacyController::class, 'editView']);

//Marketing Officer
Route::view('/admin/officer/add', 'MarketingOfficers.addofficer');
Route::post('/addOfficers', [officerController::class, 'store']);
Route::get('/admin/officer', [officerController::class, 'view']);
Route::get('/admin/deleteOfficer/{id}', [officerController::class, 'delete']);
Route::post('/editOfficer', [officerController::class, 'edit']);
Route::get('/admin/officer/edit/{id}', [officerController::class, 'editView']);

//Ambulance
Route::view('/admin/ambulance/add', 'Ambulance.addambulance');
Route::post('addAmbulance', [ambulanceController::class, 'store']);
Route::get('/admin/ambulance', [ambulanceController::class, 'view']);
Route::get('/admin/deleteAmbulance/{id}', [ambulanceController::class, 'delete']);
Route::post('/editAmbulance', [ambulanceController::class, 'edit']);
Route::get('/admin/ambulance/edit/{id}', [ambulanceController::class, 'editView']);

//Mediicine
Route::view('/admin/medicine/add', 'Medicine.addmedicine');
Route::post('/addMedicines', [medicineController::class, 'store']);
Route::get('/admin/medicine', [medicineController::class, 'view']);
Route::get('/admin/deleteMedicine/{id}', [medicineController::class, 'delete']);
Route::post('/editMedicine', [medicineController::class, 'edit']);
Route::get('/admin/medicine/edit/{id}', [medicineController::class, 'editView']);

//Doctor Schedule
Route::get('/admin/doctor/schedule/add', [scheduleController::class, 'addView']);
Route::post('/addSchedule', [scheduleController::class, 'store']);
Route::get('/admin/doctor/schedule', [scheduleController::class, 'view']);
Route::get('/admin/deleteSchedule/{id}', [scheduleController::class, 'delete']);
Route::post('/editSchedule', [scheduleController::class, 'edit']);
Route::get('/admin/schedule/edit/{id}', [scheduleController::class, 'editView']);

//Patients
Route::get('/admin/patient/add', [patientController::class, 'addView']);
Route::get('/admin/patient', [patientController::class, 'view']);
Route::post('/addPatients', [patientController::class, 'store']);
Route::get('/admin/patient/edit/{id}', [patientController::class, 'editView']);
Route::post('/editPatients', [patientController::class, 'edit']);
Route::get('/admin/deletePatient/{id}', [patientController::class, 'delete']);

//Appointments
Route::get('/admin/appointment/add', [appointmentController::class, 'addView']);
Route::post('/addAppointments', [appointmentController::class, 'store']);
Route::get('/admin/appointment', [appointmentController::class, 'view']);
Route::get('/admin/deleteAppointment/{id}', [appointmentController::class, 'delete']);
Route::get('/admin/appointment/edit/{id}', [appointmentController::class, 'editView']);
Route::post('/editAppointments', [appointmentController::class, 'edit']);

//Employee
Route::view('/admin/employee/add', 'Employee.addemployee');
Route::post('/addEmployees', [employeeController::class, 'store']);
Route::get('/admin/employee', [employeeController::class, 'view']);
Route::get('/admin/deleteEmployee/{id}', [employeeController::class, 'delete']);
Route::post('/editEmployees', [employeeController::class, 'edit']);
Route::get('/admin/employee/edit/{id}', [employeeController::class, 'editView']);
