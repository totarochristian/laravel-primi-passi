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
        'title' => "Hello world! ",
        'username' => "Christian Totaro",
        'description' => "Questo è un esempio di una pagina di benvenuto"
    ];
    return view('helloworld',$data);
})->name("helloworld");

Route::get('/todo', function () {
    $data = [
        'title' => "Hello world! ",
        'todo' => [
            "Compra il pane",
            "Vendi il gatto",
            "Adotta un cane"
        ]
    ];
    return view('thingtodo',$data);
})->name("todolist");
