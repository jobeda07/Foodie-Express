<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\dashboardController;

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

                             //dashboard
Route::get('dashboard',[dashboardController::class,'dashboard'])->name('dashboard');

                             //User
Route::get('user',[dashboardController::class,'user'])->name('user');
Route::get('userform',[dashboardController::class,'userform'])->name('userform');
Route::post('usersubmit',[dashboardcontroller::class,'user_submit'])->name('user.submit');
Route::get('userdelete/{id}',[dashboardcontroller::class,'user_delete'])->name('user.delete');
Route::get('user-editform/{id}',[dashboardcontroller::class,'user_editform'])->name('user.editform');
Route::put('user-editform-submit/{id}',[dashboardcontroller::class,'user_editform_submit'])->name('user.editform.submit');




 
                              //foodcategory
Route::get('food-category',[dashboardController::class,'category'])->name('category');                              
Route::get('category-form',[dashboardController::class,'category_form'])->name('category.form');                              
Route::post('category-form-submit',[dashboardController::class,'category_form_submit'])->name('category.form.submit');                              
Route::get('category-editpage/{id}',[dashboardController::class,'category_editpage'])->name('category.editpage');                              
Route::put('category-update/{id}',[dashboardController::class,'category_update'])->name('category.update');                              
Route::get('category-delete/{id}',[dashboardController::class,'category_delete'])->name('category.delete');        


                                 //deliveryboy//


Route::get('deliveryboy',[dashboardController::class,'deliveryboy'])->name('deliveryboy');
Route::get('deliveryboy-form',[dashboardController::class,'deliveryboy_form'])->name('deliveryboy.form');
Route::post('deliveryboy-form-submit',[dashboardController::class,'deliveryboy_form_submit'])->name('deliveryboy.form.submit');
Route::get('/deliveryboy-editpage/{id}',[dashboardController::class,'delivery_editpage'])->name('delivery.editpage');
Route::put('/deliveryboy-edit-submit/{id}',[dashboardController::class,'edit_submit'])->name('delivery.edit.submit');
Route::get('/deliveryboy-delete/{id}',[dashboardController::class,'deliveryboy_delete'])->name('deliveryboy.delete');