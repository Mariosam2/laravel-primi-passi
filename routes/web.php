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
    $data = [
        'details' => [
            'name' => 'Marco',
            'surname' => 'Mariosa',
            'age' => 21,
        ]

    ];
    return view('home', $data);
});


Route::get('/about-me', function () {
    $infos = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus libero repudiandae ea? Rerum quaerat modi ipsam harum earum totam consequatur amet nostrum. In ad quod voluptatum dolores deleniti temporibus at voluptatem tenetur placeat id fugit animi laborum molestias ut assumenda illo excepturi quas, dicta voluptas iusto aut sunt? Minima, obcaecati.';
    return view('about', compact('infos'));
})->name('about');
