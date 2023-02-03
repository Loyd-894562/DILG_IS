<?php

use Carbon\Carbon;

//Admin View
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin_View\Admin_LguController;
use App\Http\Controllers\Admin_View\Admin_HomeController;
use App\Http\Controllers\Admin_View\Admin_JobsController;
use App\Http\Controllers\Admin_View\Admin_NewsController;
use App\Http\Controllers\Admin_View\Admin_PdmuController;
use App\Http\Controllers\Admin_View\Admin_ProjectController;
use App\Http\Controllers\Admin_View\Admin_OrganizationController;
use App\Http\Controllers\Admin_View\Admin_ProfileController;
use App\Http\Controllers\Admin_View\Admin_ChangePasswordController;


//Normal View
use App\Http\Controllers\Normal_View\Lgu\LguController;
use App\Http\Controllers\Normal_View\Jobs\JobsController;
use App\Http\Controllers\Normal_View\About\AboutController;
use App\Http\Controllers\Normal_View\Contacts\ContactsController;
use App\Http\Controllers\Normal_View\Organization\OrganizationController;
use App\Http\Controllers\Normal_View\Provincial_Director\DirectorController;
use App\Http\Controllers\Normal_View\Attached_Agencies\Attached_AgenciesController;

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
    return view('/Normal_View/Home/home');
});


Auth::routes();

Route::get('/home', [Admin_HomeController::class, 'index'])->name('home');



//Routes for Kenn
//Admin_View Routes
Route::get('/admin/profile', [Admin_ProfileController::class, 'index'])->name('admin/profile');
Route::put('/update-profile/{id}', [Admin_ProfileController::class, 'update_profile']);

Route::get('/admin/change-password/{id}', [Admin_ChangePasswordController::class, 'index']);
Route::post('/admin/change-password', [Admin_ChangePasswordController::class, 'change_password']);   

Route::get('/admin/jobs', [Admin_JobsController::class, 'index'])->name('admin/jobs');
Route::post('/add-new-job', [Admin_JobsController::class, 'store']);
Route::get('/delete_jobs/{id}', [Admin_JobsController::class, 'delete_jobs']);
Route::put('/update_jobs/{id}', [Admin_JobsController::class, 'update_jobs']);

Route::get('/admin/organization', [Admin_OrganizationController::class, 'index'])->name('admin/organization');
Route::post('/add-org', [Admin_OrganizationController::class, 'store']);
Route::get('/delete_org/{id}', [Admin_OrganizationController::class, 'delete_org']);
Route::put('/update-org/{id}', [Admin_OrganizationController::class, 'update_org']);

Route::get('/admin/pdmu', [Admin_PdmuController::class, 'index'])->name('admin/pdmu');
Route::post('/add-pdmu', [Admin_PdmuController::class, 'store']);
Route::get('/delete_pdmu/{id}', [Admin_PdmuController::class, 'delete_pdmu']);
Route::put('/update-pdmu/{id}', [Admin_PdmuController::class, 'update_pdmu']);

Route::get('/admin/lgu', [Admin_LguController::class, 'index'])->name('admin/lgu');
Route::post('/add-lgu', [Admin_LguController::class, 'store']);
Route::get('/delete_lgu/{id}', [Admin_LguController::class, 'delete_lgu']);
Route::put('/update-lgu/{id}', [Admin_LguController::class, 'update_lgu']);

//Normal_View Routes
Route::get('/provincial_director',[DirectorController::class, 'index'])->name('/provincial_director');

Route::get('/attached_agencies',[Attached_AgenciesController::class, 'index'])->name('/attach_agencies');
Route::get('/lgu',[LguController::class, 'index'])->name('/lgu');












//Routes for Chadie

//Admin_View Routes
Route::get('admin/projects',[Admin_ProjectController::class,'index'])->name('admin/projects');
Route::post('admin/projects-create',[Admin_ProjectController::class,'store']);




//Normal_View Routes
Route::get('/news-update',function(){
    return view('Normal_View.News.news');
});
Route::get("/sigle-news-update",function(){
    return view('Normal_View.News.single_news');
});

Route::get("/project",function(){
    return view('Normal_View.Projects.project');
});

















//Routes for Vienna
//Admin_View Routes
Route::get('/admin/news', [Admin_NewsController::class, 'index'])->name('admin/news');

//Normal_View Routes
Route::get('/about', [AboutController::class, 'index'])->name('/about');
Route::get('/jobs', [JobsController::class, 'index'])->name('/jobs');
Route::get('/contacts', [ContactsController::class, 'index'])->name('/contacts');





















//Routes for Franklin
Route::get('/organization',[OrganizationController::class, 'index']);










//End here


