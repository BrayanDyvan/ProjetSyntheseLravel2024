<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsagerRequest;
use App\Models\professeur;
use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesResquest;
use App\Http\Requests\EquipeRequest;
use App\Http\Requests\ImagesRequest;
use App\Http\Requests\JeuxRequest;
use App\Http\Requests\VersionsResquest;

use Illuminate\Support\Facades\Date;
use App\Models\categorie;
use App\Models\version;
use App\Models\equipe;

use App\Models\Jeu;
use App\Models\image;
use App\Models\usager;
use Illuminate\Support\Facades\Log;

class UsagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createUsager()
    {
        //
        $professeurs = professeur::all();
        $jeux = Jeu::all();
        $categories = categorie::all();
        $versions = version::all();
        $equipes = equipe::all();
        $images = version::all();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.createUsager', compact('professeurs', 'jeux', 'categories', 'versions',
         'equipes', 'images', 
         'date',
         'heure'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsagerRequest $request)
    {
        
        try {
           
            $usager = new usager();
            $usager->fill($request->except('_token'));
            $uploadedFile = $request->file('avatar');
            $nomFichierUnique = str_replace('', '_', $usager->matricule) . '-' . uniqid() . '.' . $uploadedFile->extension();
            
            try {
                $request->avatar->move(public_path('img/usagers'), $nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreurlorsdutéléversementdufichier.", [$e]);
            }

            $usager->password=Hash::make($request->password);
            $usager->avatar=$nomFichierUnique;
           
            $usager->save();
  
            return redirect()->route('jeux.createUsager')->with('success', 'L\'usager a été créer avec succès.');
        } catch (\Throwable $e) {
            
            Log::debug($e);
           
            return redirect()->route('jeux.createUsager')->withErrors(['Une erreur s\'est produite lors de la création de l\'usager,
             veuillez bien entrer les informations requises']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function edit(usager $usager){
        $professeurs = professeur::all();
        $jeux = Jeu::all();
        $categories = categorie::all();
        $versions = version::all();
        $equipes = equipe::all();
        $images = version::all();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
 

     
        return view('jeux.ModifierUsager',compact('professeurs', 'jeux', 'categories', 'versions',
         'equipes', 'images', 'usager',
        'date',
        'heure'));
    }
    public function show(string $id)
    {
        //
    }
    public function login(Request $request)
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();

        $reussi = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if ($reussi) {
            return redirect()->route('jeux.index')->with('success', "Connexion réussie");
        } else {
            return redirect()->route('showLoginForm')->withErrors(['Informations invalides']);
        }



    }
    public function showLoginForm()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $date = date("Y-m-d", time());
        $heure=date("h:m:s",time());
        return view('jeux.login',compact('date','heure'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
       
        // Optionally invalidate and regenerate the session to prevent session fixation
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect()->route('jeux.index')->with('success', "Déconnexion réussie");
    }
    
    /**
     * Show the form for editing the specified resource.
     */
   

    /**
     * Update the specified resource in storage.
     */
    public function update(UsagerRequest $request, usager $usager)
    {
        //
        Log::debug("debug");
        try {
           
            $usager->nom = $request->nom;
            $usager->prenom = $request->prenom;
            $usager->email = $request->email;
            $usager->matricule = $request->matricule;
            $usager->password = Hash::make($request->password);
            $usager->equipe_id = $request->equipe_id;
            $usager->professeur_id = $request->professeur_id;
            $usager->role=$request->role;
        
            $uploadedFile = $request->file('avatar');
            $nomFichierUnique = str_replace('', '_', $usager->matricule) . '-' . uniqid() . '.' . $uploadedFile->extension();
            
            try {
                $request->avatar->move(public_path('img/usagers'), $nomFichierUnique);
             dd($nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreurlorsdutéléversementdufichier.", [$e]);
            }

            $usager->avatar=$nomFichierUnique;
           
            $usager->save();
          //  dd($usager);
            // Message de succès
           
            return redirect()->route('usager.edit', [$usager])->with('success', 'L\'usager a été modifié avec succès.');
        } catch (\Throwable $e) {
            
            Log::debug($e);
           
            return redirect()->route('usager.edit', [$usager])->withErrors(['Une erreur s\'est produite lors de la modification de l\'usager,
             veuillez bien entrer les informations requises']);
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        try {
            $usager = usager::findOrFail($id);

            $usager->jeux()->detach();
           
            
            $usager->delete();
            return redirect()->route('logout')->with('message', "Suppression de " . $usager->nom . " réussi!");
        } catch (\Throwable $e) {
            //Gérerl'erreur
            Log::debug($e);
            return redirect()->route('jeux.index')->withErrors(["la suppression de " . $usager->nom . "  n'a pas fonctionné"]);
        }
        return redirect()->route('login');




    }
}
