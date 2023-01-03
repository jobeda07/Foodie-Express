<?php

use App\Http\Controllers\Auth\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\backend\dashboardController;
use GuzzleHttp\Middleware;

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

                                   //register
Route::get('/register',[authController::class,'register'])->name('register');
Route::post('/register-submit',[authController::class,'register_submit'])->name('register.submit');

                                     //login
Route::get('/login',[authController::class,'login'])->name('login');
Route::post('/login-submit',[authController::class,'login_submit'])->name('login.submit');


Route::group(['middleware'=>'auth'],function(){


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




                            //admin//

                           
 Route::get('admin',[dashboardController::class,'admin'])->name('admin');
 Route::get('admin-form',[dashboardController::class,'admin_form'])->name('admin.form');
 Route::post('admin-form-submit',[dashboardController::class,'admin_form_submit'])->name('admin.form.submit');
 Route::get('admin-delete/{id}',[dashboardController::class,'admin_delete'])->name('admin.delete');
 Route::get('admin-editpage/{id}',[dashboardController::class,'admin_editpage'])->name('admin.editpage');
 Route::put('admin-update/{id}',[dashboardController::class,'admin_update'])->name('admin.update');



                             //food//
Route::get('food-list',[dashboardController::class,'food'])->name('food');
Route::post('food-store',[dashboardController::class,'store'])->name('food.store');
Route::get('food-form',[dashboardController::class,'food_form'])->name('food.form');
Route::get('food-form',[dashboardController::class,'food_form'])->name('food.form');
Route::get('food-editpage/{id}',[dashboardController::class,'food_editpage'])->name('food.editpage');
Route::put('food-update/{id}',[dashboardController::class,'food_update'])->name('food.update');
Route::get('food-delete/{id}',[dashboardController::class,'food_delete'])->name('food.delete');




         

});

                           


                     
                      //home-start
Route::get('home',[homeController::class,'home'])->name('home');