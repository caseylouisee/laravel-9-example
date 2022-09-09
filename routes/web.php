<?php

use App\Http\Controllers\AnimalController;
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
})->middleware('polite');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
	Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::delete('/animals/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');

Route::get('/secret',function (){
    return "secret";
})->middleware(['auth']);

Route::redirect('/here','/there');

Route::get('/animals/{name}', function($name){
    return "Swansea zoo is home to $name and many others";
});

Route::get('user/{name?}', function($name = null){
    return $name;
});

Route::get('/food', function(){
    return view('food');
});

Route::get('/enclosures/{animal?}', function($animal = null){
    return view('enclosure', ['animal'=>$animal]);
});


require __DIR__.'/auth.php';
