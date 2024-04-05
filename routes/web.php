<?php

use App\Http\Controllers\peopleController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Adduser;
use App\Livewire\Boxeslivewire;
use App\Livewire\Homelivewire;
use App\Livewire\Mainlivewire;
use App\Livewire\Rolelivewire;
use App\Livewire\Roundlivewire;
use App\Livewire\Showusers;
use App\Livewire\Userchange;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('welcome');});
//Route::get('/', function () { return view('admin/index');})->name('index')->middleware('auth');



Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

///////////////-----------------
Route::get('/add', function () { return view('admin/add');})->name('add');
Route::get('/users', function () { return view('admin/users');})->name('users');
Route::get('/roles', function () { return view('admin/roles');})->name('roles');
Route::get('/boxes', function () { return view('admin/boxes');})->name('boxes');
Route::get('/main', function () { return view('admin/main');})->name('main');
Route::get('/rounds', function () { return view('admin/rounds');})->name('rounds');


Route::get('/singlepeople/{id}', [peopleController::class, 'show'] )->name('singlepeople');
Route::get('/search', [peopleController::class, 'search'] )->name('search');
Route::get('/history', function () { return view('admin/history');} )->name('history');

Route::get('/adduser', Adduser::class)->name('adduser');
Route::get('/showusers', Showusers::class)->name('showusers');
Route::get('/userchange', Userchange::class)->name('userchange');
Route::get('/homelivewire', Homelivewire::class)->name('homelivewire');
Route::get('/rolelivewire', Rolelivewire::class)->name('rolelivewire');
Route::get('/boxeslivewire', Boxeslivewire::class)->name('boxeslivewire');
Route::get('/mainlivewire', Mainlivewire::class)->name('mainlivewire');
Route::get('/roundlivewire', Roundlivewire::class)->name('roundlivewire');








});

require __DIR__.'/auth.php';
