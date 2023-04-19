<?php

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
    $user = [
        'students' => [
            [
                'id' => '1',
                'name' => 'abdo',
                'country' => 'egypt'
            ],
            [
                'id' => '2',
                'name' => 'ahmed',
                'country' => 'canada'
            ],
            [
                'id' => '3',
                'name' => 'yasser',
                'country' => 'USA'
            ]
        ]

    ];
    return view('students', $user);
});

