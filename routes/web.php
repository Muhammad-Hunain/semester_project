<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
Use App\HTTP\Controllers\moderator;
Use App\HTTP\Controllers\std;
Use App\HTTP\Controllers\teacher;
Use App\HTTP\Controllers\mod_stu;
Use App\HTTP\Controllers\LogoutController;
use App\Models\Student;

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

Route::view('login','admin.login');
Route::get('/', function () {
    return view('login');
});


Route::post('login',[User::class,'login']);




Route::group(['middleware'=>['admin']],function(){

    // Route::get('admin ', function () {
    //     return view('admin.index');
    // });

    // Route::view('admin','admin.index');
    // Route::get('admin','admin.index');

    
Route::view('admin/student/add','admin.student.adddata');
Route::view('admin/moderator/add','admin.moderator.adddata');
Route::view('admin/teacher/add','admin.teacher.adddata');

Route::post('student/save',[std::class,'Student']);
Route::post('teacher/save',[teacher::class,'Teacher']);
Route::post('moderator/save',[moderator::class,'moderator']);

Route::get('viewdata_student',[std::class,'studentshow']);
Route::get('viewdata_teacher',[teacher::class,'teachershow']);
Route::get('viewdata_moderator',[moderator::class,'moderatorshow']);

Route::get('delete/{id}',[std::class,'delete_student']);
Route::get('Edit/{id}',[std::class,'showdata_student']);
Route::post('edit',[std::class,'update_student']);


Route::get('delete/{id}',[teacher::class,'delete_teacher']);
Route::get('Edit/{id}',[teacher::class,'showdata_teacher']);
Route::post('edit',[teacher::class,'update_teacher']);


Route::get('delete/{id}',[moderator::class,'delete_moderator']);
Route::get('Edit/{id}',[moderator::class,'showdata_moderator']);
Route::post('edit',[moderator::class,'update_moderator']);


Route::get('/logout', [LogoutController::class,'perform']);



Route::get('/', [User::class,'count']);

});

Route::group(['middleware'=>['student']],function(){
        Route::view('student','student.studentadminpanel');
});

Route::group(['middleware'=>['teacher']],function(){
    Route::view('teacher','teacher.teacheradminpanel');
    Route::view('form','teacher.form');
});


    Route::group(['middleware'=>['moderator']],function(){
    Route::view('moderator','moderator.moderatoradminpanel');
    Route::view('moderator/student/add','moderator.student.adddata');
    Route::post('moderator/student/save',[mod_stu::class,'Student_mod']);
    Route::get('moderator/viewdata_student',[mod_stu::class,'studentshow_mod']);


    Route::get('delete/{id}',[mod_stu::class,'delete_student_mod']);
    Route::get('Edit/{id}',[mod_stu::class,'showdata_student_mod']);
    Route::post('edit',[mod_stu::class,'update_student_mod']);


    Route::get('count_mod', [mod_stu::class,'count_mod']);
});






Route::get('show',[student::class,'show']);