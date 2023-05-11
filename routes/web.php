<?php
namespace App\Models\students;
use App\Models\students;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', function () {
 $students=[
    'students'=>students::all()
 ];
    return view('students', $students);
});



Route::get('/students/{id}', function ($id) {
 $student=[
    'student'=>students::find($id)
 ];
    return view('student', $student);
});

