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

    $data_f = [

            'footer' => config('footer')
        ];

    return view('home', $data_f);
})->name('homepage');

Route::get('/products', function () {

    $data = [
        /*il primo 'pasta' si riferisce al nome che dobbiamo dare all'array, il secondo config('pasta') si riferisce al file pasta.php presente nella cartella config*/
            'pasta' => config('pasta')
        ];

    $data_f = [

            'footer' => config('footer')
        ];

    $data_t = [
         'tipo' => [
                   'lunga' => 'Le Lunghe',
                   'corta' => 'Le Corte',
                   'cortissima' => 'Le Cortissime',
                ]
        ];

    return view('products', $data, $data_f, $data_t);
})->name('products');

Route::get('/news', function () {

    $data_f = [

            'footer' => config('footer')
        ];

    return view('news', $data_f);
})->name('news');;
