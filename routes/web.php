<?php

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
    return view('welcome');
});

Route:: prefix('students')->group(function() {
    Route::get('','App\Http\Controllers\StudentController@index')->name('student.index');
    Route::get('create','App\Http\Controllers\StudentController@index')->name('student.index');
    Route::post('store','App\Http\Controllers\StudentController@index')->name('student.index');
    Route::get('edit/{student}','App\Http\Controllers\StudentController@index')->name('student.index');
    Route::post('update/{student}','App\Http\Controllers\StudentController@index')->name('student.index');
    Route::post('destroy/{student}','App\Http\Controllers\StudentController@index')->name('student.index');
    Route::get('show/{student}','App\Http\Controllers\StudentController@index')->name('student.index');

});

Route:: prefix('attendancegroups')->group(function() {
    Route::get('','App\Http\Controllers\AttendanceGroupController@index')->name('attendancegroup.index');
    Route::get('create','App\Http\Controllers\AttendanceGroupController@index')->name('attendancegroup.index');
    Route::post('store','App\Http\Controllers\AttendanceGroupController@index')->name('attendancegroup.index');
    Route::get('edit/{attendancegroup}','App\Http\Controllers\AttendanceGroupController@index')->name('attendancegroup.index');
    Route::post('update/{attendancegroup}','App\Http\Controllers\AttendanceGroupController@index')->name('attendancegroup.index');
    Route::post('destroy/{attendancegroup}','App\Http\Controllers\AttendanceGroupController@index')->name('attendancegroup.index');
    Route::get('show/{attendancegroup}','App\Http\Controllers\AttendanceGroupController@index')->name('attendancegroup.index');

});

Route:: prefix('schools')->group(function() {
    Route::get('','App\Http\Controllers\SchoolController@index')->name('school.index');
    Route::get('create','App\Http\Controllers\SchoolController@index')->name('school.index');
    Route::post('store','App\Http\Controllers\SchoolController@index')->name('school.index');
    Route::get('edit/{school}','App\Http\Controllers\SchoolController@index')->name('school.index');
    Route::post('update/{school}','App\Http\Controllers\SchoolController@index')->name('school.index');
    Route::post('destroy/{school}','App\Http\Controllers\SchoolController@index')->name('school.index');
    Route::get('show/{school}','App\Http\Controllers\SchoolController@index')->name('school.index');

});