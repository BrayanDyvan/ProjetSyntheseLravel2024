<?php

use App\Http\Controllers\JeuxControlleur;
use App\Http\Controllers\UsagerController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('jeux', [JeuxControlleur::class,'index']

)->name('jeux.index');

Route::post('/jeu', [JeuxControlleur::class,'store'])->name('jeux.store');

Route::post('/usager', [UsagerController::class,'store'])->name('createUsager');

Route::post('/jeu/categorie', [JeuxControlleur::class,'storeJeuCategorie'])->name('jeux.storeJeuCategorie')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::post('/jeu/equipe', [JeuxControlleur::class,'storeEquipe'])->name('jeux.storeEquipe')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::post('/jeu/{jeu}/ModifierCategorie', [JeuxControlleur::class,'storeModifierJeuCategorie'])->name('jeux.storeModifierJeuCategorie')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::post('/jeu/version', [JeuxControlleur::class,'storeVersion'])->name('jeux.storeVersion')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::post('/jeu/{jeu}/ModifierVersion', [JeuxControlleur::class,'storeModifierVersion'])->name('jeux.storeModifierVersion')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::post('/jeu/image', [JeuxControlleur::class,'storeImage'])->name('jeux.storeImage')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::post('/jeu/{jeu}/ModifierImage', [JeuxControlleur::class,'storeModifierImage'])->name('jeux.storeModifierImage')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::post('/jeu/{jeu}/usager/{usager}/commentaires', [JeuxControlleur::class,'commentaires'])->name('jeux.commentaires')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::post('/jeu/downloadImg', [JeuxControlleur::class,'downloadImg'])->name('jeu.downloadImg');

Route::get('/creationJeux',[JeuxControlleur::class,'create'])->name('jeux.create')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('/creationUsager',[UsagerController::class,'createUsager'])->name('jeux.createUsager')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('/categories', [JeuxControlleur::class,'categories']

)->name('jeux.categories')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');
Route::get('/categorie', [JeuxControlleur::class,'categorie']

)->name('jeux.categorie')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');
Route::get('/version', [JeuxControlleur::class,'version']

)->name('jeux.version')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');
Route::get('/image', [JeuxControlleur::class,'image']

)->name('jeux.image')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('/login', [UsagerController::class,'showLoginForm']

)->name('showLoginForm');
Route::get('/logout', [UsagerController::class,'logout']

)->name('logout');

Route::post('/login', [UsagerController::class,'login']

)->name('login');


Route::get('/anime-details', [JeuxControlleur::class,'details']

)->name('jeux.anime-details')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');


Route::get('/jeu/anime-watching/{jeu}/', [JeuxControlleur::class,'watchingDetails']

)->name('jeux.watching')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');;

Route::get('/anime-watching', [JeuxControlleur::class,'watching']

)->name('jeux.anime-watching')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::get('/blog-details', [JeuxControlleur::class,'blogDetails']

)->name('jeux.blog-details');
Route::get('/jeux/blog-details/{jeu}/', [JeuxControlleur::class,'blogDetails']

)->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');
Route::get('/blog', [JeuxControlleur::class,'blog']

)->name('jeux.blog')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::get('/signup', [JeuxControlleur::class,'sign']

)->name('jeux.signup');


Route::get('#', [JeuxControlleur::class,'contact']

);
Route::get('/jeux/categories', [JeuxControlleur::class,'categories']

)->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');


Route::get('/jeu/{jeu}/Modification',[JeuxControlleur::class,'modifier'])->name('jeux.edit')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('/jeu/usager/{usager}/Modification',[UsagerController::class,'edit'])->name('usager.edit')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::patch('/jeu/{jeu}/Modifié',[JeuxControlleur::class,'update'])->name('jeux.update')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::patch('/jeu/usager/{usager}/Modifié',[UsagerController::class,'update'])->name('usager.update')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('/jeu/{jeu}/ModifierCategorie',[JeuxControlleur::class,'modifierCategorie'])->name('jeux.modifierCategorie')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('/jeu/{jeu}/ModifierVersion',[JeuxControlleur::class,'modifierVersion'])->name('jeux.modifierVersion')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('/jeu/{jeu}/ModifierImage',[JeuxControlleur::class,'modifierImage'])->name('jeux.modifierImage')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');



Route::get('/jeu/{jeu}/', [JeuxControlleur::class,'show']

)->name('jeux.show');

Route::delete('/jeu/{id}/', [JeuxControlleur::class,'destroy']

)->name('jeux.destroy')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::delete('/jeu/usager/{id}/', [UsagerController::class,'destroy']

)->name('usager.destroy')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

