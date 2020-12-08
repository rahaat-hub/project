<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ChildController;
use App\Http\Controllers\Backend\VaccineController;
use App\Http\Controllers\Backend\VolunteerController;
use App\Http\Controllers\Backend\OrgController;

use Illuminate\Support\Facades\Route;

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
    return view('backend.master');
});

//admin

Route::get('/admin/registration',[AdminController::class,'signup'])->name('admin.signup');
Route::post('/admin/store',[AdminController::class,'store'])->name('admin.store');
Route::get('/admin/list',[AdminController::class,'adminlist'])->name('admin.list');
Route::get('/login',[AdminController::class,'login'])->name('admin.login');

//volunteer
Route::get('/volunteer/registration', [VolunteerController::class,'signup'])->name('vlntr.signup');
Route::post('/volunteer/store',[VolunteerController::class,'store'])->name('vlntr.store');
Route::get('/volunteer/list',[VolunteerController::class,'vlntrlist'])->name('volunteer.list');


//child
Route::get('/child/registration',[ChildController::class,'signup'])->name('child.signup');
Route::post('/child/store',[ChildController::class,'store'])->name('child.store');
Route::get('/childs/list',[ChildController::class,'childslist'])->name('child.list');


//vaccine
Route::get('/vaccine/add',[VaccineController::class,'add'])->name('vaccine.add');
Route::post('/vaccine/store',[VaccineController::class,'store'])->name('vaccine.store');
Route::get('/vaccine/info',[VaccineController::class,'vaccinelist'])->name('vaccine.list');



//organization
Route::get('/org/registration',[OrgController::class,'org'])->name('org.reg');
Route::post('/org/list',[OrgController::class,'store'])->name('org.store');
Route::get('/org/list',[OrgController::class,'orglist'])->name('org.list');

//delete
Route::get('/child/delete/{id}',[ChildController::class,'delete'])->name('child.delete');
Route::get('/admin/delete/{id}',[AdminController::class,'delete'])->name('admin.delete');
Route::get('/volunteer/delete/{id}',[VolunteerController::class,'delete'])->name('volunteer.delete');
Route::get('/vaccine/delete/{id}',[VaccineController::class,'delete'])->name('vaccine.delete');


//edit---update
Route::get('/admin/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
Route::post('/admin/update/{id}',[AdminController::class,'update'])->name('admin.update');
Route::get('/vaccine/edit/{id}',[VaccineController::class,'edit'])->name('vaccine.edit');
Route::post('/vaccine/update/{id}',[VaccineController::class,'update'])->name('vaccine.update');
Route::get('/child/edit/{id}',[ChildController::class,'edit'])->name('child.edit');
Route::post('/child/update/{id}',[VolunteerController::class,'child'])->name('child.update');
Route::get('/volunteer/edit/{id}',[VolunteerController::class,'edit'])->name('vlntr.edit');
Route::post('/volunteer/update/{id}',[VolunteerController::class,'update'])->name('vlntr.update');

//view
Route::get('/child/view/{id}',[ChildController::class,'view'])->name('child.view');
Route::get('/volunteer/view/{id}',[VolunteerController::class,'view'])->name('vlntr.view');

Route::get('vaccine/view/{id}',[VaccineController::class,'view'])->name('vaccine.view');



Route::get('/abc',function(){
    return view('frontend.master');
});