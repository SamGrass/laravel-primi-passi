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

    $title = 'Primo Progetto Laravel';
    $animals = ["Cane", "Gatto", "Elefante", "Leone", "Tigre", "Cavallo", "Mucca", "Pinguino"];
    // $cars = ["Ferrari", "Lamborghini", "BMW", "Mercedes", "Audi", "Tesla", "Fiat", "Ford"];
    $cars = [];
    return view('home', compact('animals', 'cars', 'title'));
});

Route::get('/animals', function () {
    $animals = ["Cane", "Gatto", "Elefante", "Leone", "Tigre", "Cavallo", "Mucca", "Pinguino"];
    return view('animals', compact('animals'));
});

Route::get('/cars', function () {
    // $cars = ["Ferrari", "Lamborghini", "BMW", "Mercedes", "Audi", "Tesla", "Fiat", "Ford"];
    $cars = [];
    return view('cars', compact('cars'));
});
