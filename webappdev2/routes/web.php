<?php
use App\Student;
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

Route::get('/WelcomeStudent',function(){

	    $students = Student::all();
        return view('WelcomeStudent',compact('students'));
});
//---------------viewer-----------------
Route::post('/Register','StudentFormCont@RegisterWindow');


//---------------processor--------------

Route::post('/RunRegister','StudentFormCont@RegisterProcess');
Route::get('/Update/{id}','StudentFormCont@SetValue');
Route::post('/RunUpdate','StudentFormCont@UpdateProcess');

Route::get('/RunDelete/{id}','StudentFormCont@DeleteProcess');
//---------------showtable-------------------



//------------------stats cont
