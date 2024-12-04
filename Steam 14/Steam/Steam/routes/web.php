<?php

use App\Http\Controllers\JeuxControlleur;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('jeux', [JeuxControlleur::class,'index']

);

Route::get('/categories.html', [JeuxControlleur::class,'categories']

);

Route::get('/login.html', [JeuxControlleur::class,'login']

);

Route::get('/anime-details.html', [JeuxControlleur::class,'details']

);

Route::get('/anime-watching.html', [JeuxControlleur::class,'watching']

);

Route::get('/blog-details.html', [JeuxControlleur::class,'blogDetails']

);
Route::get('/blog.html', [JeuxControlleur::class,'blog']

);
Route::get('/signup.html', [JeuxControlleur::class,'sign']

);

Route::get('#', [JeuxControlleur::class,'contact']

);


