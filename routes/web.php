<?php

use App\Models\Poll;
use Illuminate\Http\Request;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/polls', function (Request $request) {
    return view('polls.index');
})->middleware('auth')->name('polls.index');

Route::get('/polls/create', function () {
    return view('polls.create');
})->middleware('auth')->name('polls.create');

Route::get('/polls/{poll}', function (Poll $poll) {
    return view('polls.show', [
        'poll' => $poll,
    ]);
})->middleware('auth')->name('polls.show');

require __DIR__.'/auth.php';
