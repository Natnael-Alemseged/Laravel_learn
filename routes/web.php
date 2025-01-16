<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

Route::get('/', function () {
    return view('home', [
        'greetings' => 'wagawan',
        'name' => 'keshtua',
    ]);
});

Route::get('/jobs', function () {
    // return view('jobs');
    return Jobs::getAllJobs();
});
Route::get('/jobs/{id}', function ($id) {
    $job = Jobs::all();

    return $job[$id];

    // return Jobs::getJob($id);
});
Route::get('/contacts', function () {
    return view('contacts');
});
