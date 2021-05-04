<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ChildController;
use App\Http\Controllers\Backend\VaccineController;
use App\Http\Controllers\Backend\VolunteerController;
use App\Http\Controllers\Backend\OrgController;
use App\Http\Controllers\Backend\ChildVaccinController;
<<<<<<< HEAD
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\ChildController as child;
use App\Models\Admin;
=======
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\ChildController as child;
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
use App\Models\Child as ModelsChild;
use Illuminate\Support\Facades\Route;
use App\Models\Child_vaccin;
use Symfony\Component\Routing\Loader\Configurator\Traits\PrefixTrait;

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
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
<<<<<<< HEAD

Route::post('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.store');

///Child Login

//Route::post('/volunteer/login',[AdminController::class,'volunteerlogin'])->name('volunteer.login');


///user login
//Route::post('/user/login',[AdminController::class,'userLogin'])->name('user.login');


//Route::get('/master',[HomeController::class,'master2'])->name('master2');



Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');


Route::group(['middleware'=>'auth'],function(){
    
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/master',[HomeController::class,'master2'])->name('master2');

    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
        //admin
    
    Route::get('/admin/registration',[AdminController::class,'signup'])->name('admin.signup');
    Route::post('admin/store',[AdminController::class,'store'])->name('store');
=======
Route::post('/admin/login',[AdminController::class,'store'])->name('admin.store');



Route::group(['middleware'=>'auth','admin'],function(){

    Route::get('/', function () {
        return view('backend.master');  })->name('home');
    
    
    Route::group(['namespace'=>'Backend'],function(){
        //admin
    
    //Route::get('/admin/registration',[AdminController::class,'signup'])->name('admin.signup');
    //Route::post('/admin/admin/store',[AdminController::class,'store'])->name('admin.store');
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
    Route::get('/admin/list',[AdminController::class,'adminlist'])->name('admin.list');
    
    
    //volunteer
    Route::get('/volunteer/registration', [VolunteerController::class,'signup'])->name('vlntr.signup');
    Route::post('/volunteer/store',[VolunteerController::class,'store'])->name('vlntr.store');
    Route::get('/volunteer/list',[VolunteerController::class,'vlntrlist'])->name('volunteer.list');
    
    
    //child
    Route::get('/child/registration',[ChildController::class,'signup'])->name('child.signup');
    Route::post('/child/store',[ChildController::class,'store'])->name('child.store');
<<<<<<< HEAD
    Route::get('/childs/list',[AdminController::class,'childslist'])->name('child.list');

    Route::get('/all/child/card/info',[ChildController::class,'allinfo'])->name('allinfo');

    Route::get('/profile',[AdminController::class,'profile'])->name('profile');
=======
    Route::get('/childs/list',[ChildController::class,'childslist'])->name('child.list');
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
    
    
    //Route::get('/childs/login',[ChildController::class,'childslogin'])->name('child.login');
    
    
    //vaccine
    Route::get('/vaccine/add',[VaccineController::class,'add'])->name('vaccine.add');
    Route::post('/vaccine/store',[VaccineController::class,'store'])->name('vaccine.store');
    Route::get('/vaccine/info',[VaccineController::class,'vaccinelist'])->name('vaccine.list');
    
    //Route::post('/vaccine/card/',[ChildVaccinController::class,'card'])->name('vaccine.card');
    
    //organization
<<<<<<< HEAD
    /**Route::get('/org/registration',[OrgController::class,'org'])->name('org.reg');
    Route::post('/org/store',[OrgController::class,'store'])->name('org.store');
    Route::get('/org/list',[OrgController::class,'orglist'])->name('org.list');**/
=======
    Route::get('/org/registration',[OrgController::class,'org'])->name('org.reg');
    Route::post('/org/store',[OrgController::class,'store'])->name('org.store');
    Route::get('/org/list',[OrgController::class,'orglist'])->name('org.list');
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
    
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
    Route::post('/child/update/{id}',[ChildController::class,'update'])->name('child.update');
    Route::get('/volunteer/edit/{id}',[VolunteerController::class,'edit'])->name('vlntr.edit');
    Route::post('/volunteer/update/{id}',[VolunteerController::class,'update'])->name('vlntr.update');
    
    //view
    Route::get('/child/view/{id}',[ChildController::class,'view'])->name('child.view');
    Route::get('/volunteer/view/{id}',[VolunteerController::class,'view'])->name('vlntr.view');
<<<<<<< HEAD
    Route::get('/admin/view/{id}',[AdminController::class,'view'])->name('admin.view');
    Route::get('vaccine/view/{id}',[VaccineController::class,'view'])->name('vaccine.view');

=======
    Route::get('vaccine/view/{id}',[VaccineController::class,'view'])->name('vaccine.view');
    
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
    //Vaccine_request
    Route::get('/book/no',[VaccineController::class,'request'])->name('request');
    
    Route::get('/child/book/no',[ChildController::class,'findcard'])->name('child.findcard');
    Route::get('/child/card',[ChildController::class,'cardshow'])->name('child.card');
    Route::post('/provided/vaccine',[ChildVaccinController::class,'childvaccine'])->name('provide.vaccine');
<<<<<<< HEAD

    Route::get('/card',[ChildVaccinController::class,'viewcard'])->name('viewcard');
    Route::get('/children',[ChildVaccinController::class,'demo'])->name('demo');

    Route::get('/child/add',[ChildController::class,'new'])->name('new.child');
    
    
});
    
    
    
    

    //Route::get('/vaccine/card/info',[ChildController::class,'list'])->name('card');
    
    






/**Route::group(['namespace'=>'Frontend'],function(){
    Route::get('/home',[FrontController::class,'home'])->name('index');
    Route::get('/duplicate/home',[FrontController::class,'duplicate'])->name('duplicate');
=======
    });


});


>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec

    Route::get('/about',[FrontController::class,'about'])->name('about');
    Route::get('/vaccine/schedule',[FrontController::class,'schedule'])->name('schedule');

<<<<<<< HEAD
    //
    //Route::get('/acard',[FrontController::class,'viewcard'])->name('view.card');

});**/
=======
Route::group(['namespace'=>'Frontend'],function(){
    Route::get('/home',[FrontController::class,'home'])->name('index');
    Route::get('/new/request',[FrontController::class,'signup'])->name('signup');
    Route::get('/vaccine/list',[FrontController::class,'vaccinelist'])->name('show.vaccine');
});

>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
