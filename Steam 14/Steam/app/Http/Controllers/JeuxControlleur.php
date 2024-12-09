<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoriesResquest;
use App\Http\Requests\EquipeRequest;
use App\Http\Requests\ImagesRequest;
use App\Http\Requests\JeuxRequest;
use App\Http\Requests\VersionsResquest;
use App\Models\professeur;
use Auth;
use Illuminate\Support\Facades\Date;
use App\Models\categorie;
use App\Models\version;
use App\Models\equipe;
use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\image;
use App\Models\usager;
use IlluminateSupportCarbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Traits\ForwardsCalls;

class JeuxControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        //C'est le controleur qui interroge la BD et qui passe les jeux à la vue
        $jeux = Jeu::All();
        $jeuxImageAffcihe = Jeu::limit(5)->get();
        $jeuxDate = Jeu::orderBy('created_at', 'asc')->limit(5)->get();
        $images = image::All();
        $usagers = usager::All();
        $categories = categorie::All();
        $dateWeek = date("W", time());
        $heure=date("h:m:s",time());
        $dateMonth = date("m", time());
        $dateYear = date("Y", time());
        $dateDay = date("d", time());
        $date = date("Y-m-d", time());
        return view('jeux.index', compact(
            'jeux',
            'images',
            'categories'
            ,
            'dateWeek',
            'dateYear',
            'dateDay',
            'dateMonth',
            'usagers',
            'jeuxDate',
            'jeuxImageAffcihe',
            'date',
            'heure'
        ));
    }

    public function categories()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $jeux = Jeu::All();
        $jeuxDate = Jeu::orderBy('created_at', 'asc')->limit(5)->get();
        $images = image::All();
        $usagers = usager::All();
        $categories = categorie::All();
        $dateWeek = date("W", time());
        $dateMonth = date("m", time());
        $dateYear = date("Y", time());
        $dateDay = date("d", time());
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.categories', compact(
            'jeux',
            'images',
            'categories'
            ,
            'dateWeek',
            'dateYear',
            'dateDay',
            'dateMonth',
            'usagers',
            'jeuxDate',
            'date',
            'heure'
            
        ));
    }
    public function categorie(jeu $jeu)
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        // dd($request);
        $jeux = Jeu::All();
        $jeuxDate = Jeu::orderBy('created_at', 'asc')->limit(5)->get();
        $images = image::All();
        $usagers = usager::All();
        $categories = categorie::All();
        $dateWeek = date("W", time());
        $dateMonth = date("m", time());
        $dateYear = date("Y", time());
        $dateDay = date("d", time());
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.categorie', compact(
            'jeux',
            'images',
            'categories'
            ,
            'dateWeek',
            'dateYear',
            'dateDay',
            'dateMonth',
            'usagers',
            'jeuxDate',
            'jeu',
            'date',
            'heure'
        ));
    }
    public function modifierCategorie(Jeu $jeu)
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        // dd($request);
        $jeux = Jeu::All();
        $jeuxDate = Jeu::orderBy('created_at', 'asc')->limit(5)->get();
        $images = image::All();
        $usagers = usager::All();
        $categories = categorie::All();
        $dateWeek = date("W", time());
        $dateMonth = date("m", time());
        $dateYear = date("Y", time());
        $dateDay = date("d", time());
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.modifierCategorie', compact(
            'jeux',
            'images',
            'categories'
            ,
            'dateWeek',
            'dateYear',
            'dateDay',
            'dateMonth',
            'usagers',
            'jeuxDate',
            'jeu',
            'date',
            'heure'
        ));
    }
    public function modifierVersion(Jeu $jeu)
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        // dd($request);
        $jeux = Jeu::All();
        $jeuxDate = Jeu::orderBy('created_at', 'asc')->limit(5)->get();
        $images = image::All();
        $usagers = usager::All();
        $categories = categorie::All();
        $dateWeek = date("W", time());
        $dateMonth = date("m", time());
        $dateYear = date("Y", time());
        $dateDay = date("d", time());
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.modifierVersion', compact(
            'jeux',
            'images',
            'categories'
            ,
            'dateWeek',
            'dateYear',
            'dateDay',
            'dateMonth',
            'usagers',
            'jeuxDate',
            'jeu',
            'date',
            'heure'
        ));
    }
    public function modifierImage(Jeu $jeu)
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        // dd($request);
        $jeux = Jeu::All();
        $jeuxDate = Jeu::orderBy('created_at', 'asc')->limit(5)->get();
        $images = image::All();
        $usagers = usager::All();
        $categories = categorie::All();
        $dateWeek = date("W", time());
        $dateMonth = date("m", time());
        $dateYear = date("Y", time());
        $dateDay = date("d", time());
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.modifierImage', compact(
            'jeux',
            'images',
            'categories'
            ,
            'dateWeek',
            'dateYear',
            'dateDay',
            'dateMonth',
            'usagers',
            'jeuxDate',
            'jeu',
            'date',
            'heure'
        ));
    }
    public function version()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $jeux = Jeu::All();
        $jeuxDate = Jeu::orderBy('created_at', 'asc')->limit(5)->get();
        $images = image::All();
        $usagers = usager::All();
        $categories = categorie::All();
        $dateWeek = date("W", time());
        $dateMonth = date("m", time());
        $dateYear = date("Y", time());
        $date = date("Y-m-d", time());
        $dateDay = date("d", time());
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.version', compact(
            'jeux',
            'images',
            'categories'
            ,
            'dateWeek',
            'dateYear',
            'dateDay',
            'dateMonth',
            'usagers',
            'jeuxDate',
            'date',
            'heure'
        ));
    }
    public function image()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $jeux = Jeu::All();
        $jeuxDate = Jeu::orderBy('created_at', 'asc')->limit(5)->get();
        $images = image::All();
        $usagers = usager::All();
        $categories = categorie::All();
        $dateWeek = date("W", time());
        $dateMonth = date("m", time());
        $dateYear = date("Y", time());
        $dateDay = date("d", time());
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.image', compact(
            'jeux',
            'images',
            'categories'
            ,
            'dateWeek',
            'dateYear',
            'dateDay',
            'dateMonth',
            'usagers',
            'jeuxDate',
            'date',
            'heure'
        ));
    }


    public function details()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.anime-details',compact(
        'date',
        'heure'));
    }

    public function show(Jeu $jeu)
    {
        //select pour aller chercher tous les jeux
        //$jeux=Jeu::All();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.anime-detail', compact('jeu',
        'date',
        'heure'));
    }
    public function watching()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.anime-watching',compact(
        'date',
        'heure'));
    }
    public function watchingDetails(Jeu $jeu)
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.anime-watching', compact('jeu',
        'date',
        'heure'));
    }
    public function blogDetails()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.blog-details',compact(
        'date',
        'heure'));
    }
    public function blog()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.blog',compact(
        'date',
        'heure'));
    }

    public function sign()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.signup',compact(
        'date',
        'heure'));
    }
    public function contact()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        $heure=date("h:m:s",time());
        $date = date("Y-m-d", time());
        return view('jeux.contact',compact(
        'date',
        'heure'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
        return view('jeux.create', compact('professeurs', 'jeux', 'categories', 'versions', 'equipes', 'images', 'date','heure'));
    }
    public function modifier(Jeu $jeu)
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
        return view('jeux.modifier', compact('professeurs', 'jeux', 'categories', 'versions', 'equipes', 'images', 'date', 'jeu','heure'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return  \Illuminate\Http\Response
     */

    public function store(JeuxRequest $request)
    {



        try {
            // dd($request);
            Log::debug("debug");
            $jeu = new jeu();
            $jeu->fill($request->except('_token'));
            $uploadedFile = $request->file('image');
            $nomFichierUnique = str_replace('', '_', $jeu->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try {
                $request->image->move(public_path('img'), $nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreurlorsdutéléversementdufichier.", [$e]);
            }

            $jeu->image = $nomFichierUnique;
            $jeu->save();

            // Message de succès
            Log::debug("oui");
            return redirect()->route('jeux.modifierCategorie', [$jeu])->with('success', 'Le jeu a été créé avec succès.');


        } catch (\Throwable $e) {

            Log::debug($e);

            return redirect()->route('jeux.create')->withErrors(['Une erreur s\'est produite lors de la création du jeux']);

        }



    }


    public function downloadImg(Request $request, Jeu $jeu)
    {
        // try {


        //     $image->lien = $nomFichierUnique;
        //     $image->save();
        //     return redirect()->route('jeu.show')->with('message', "Ajoutdel'acteur" . $acteur->nom . "réussi!");
        // } catch (\Throwable $e) {
        //     //Gérerl'erreur
        //     Log::debug($e);
        //     return redirect()->route('acteurs.index')->withErrors(['l\'ajoutn\'apasfonctionné']);
        // }

    }

    public function update(JeuxRequest $request, Jeu $jeu)
    {
        //
        Log::debug("debug");
        try {
            // dd($request);
            $jeu->nom = $request->nom;
            $jeu->nbTelechargement = $request->nbTelechargement;
            $jeu->dateDepot = $request->dateDepot;
            $jeu->Resumer = $request->Resumer;
            $jeu->video = $request->video;
            $jeu->image = $request->image;
            $jeu->nbVersion = $request->nbVersion;
            $jeu->professeur_id = $request->professeur_id;
            $jeu->equipe_id = $request->equipe_id;

            $uploadedFile = $request->file('image');
            $nomFichierUnique = str_replace('', '_', $jeu->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try {
                $request->image->move(public_path('img'), $nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreurlorsdutéléversementdufichier.", [$e]);
            }

            $jeu->image = $nomFichierUnique;
            $jeu->save();

            // Message de succès
            Log::debug("oui");
            return redirect()->route('jeux.modifierCategorie', [$jeu])->with('success', 'Le jeu a été modifié avec succès.');


        } catch (\Throwable $e) {

            Log::debug($e);

            return redirect()->route('jeux.create')->withErrors(['Une erreur s\'est produite lors de la modification du jeux']);

        }



    }
    public function storeVersion(VersionsResquest $request)
    {
        //

        try {
            //dd($request);
            $version = new version();
            $version->fill($request->except('_token'));
            $version->save();

            return redirect()->route('jeux.version')->with('success', 'La version a été assigné avec succès.');
        } catch (\Throwable $e) {

            Log::debug($e);
            return redirect()->route('jeux.version')->withErrors(['Une erreur s\'est produite lors de l\' assignation de la version au jeu']);
        }



    }
    public function storeEquipe(EquipeRequest $request)
    {
        //

        try {
            //dd($request);
            $equipe = new equipe();
            $equipe->fill($request->except('_token'));
            $equipe->save();

            return redirect()->route('jeux.create')->with('success', 'L\'équipe a été crée avec succès.');
        } catch (\Throwable $e) {

            Log::debug($e);
            return redirect()->route('jeux.create')->withErrors(['Une erreur s\'est produite lors de la création de l\'équipe']);
        }



    }
    public function storeModifierVersion(VersionsResquest $request, Jeu $jeu)
    {
        //

        try {
            //dd($request);
            $version = new version();
            $version->fill($request->except('_token'));
            $version->save();

            return redirect()->route('jeux.modifierVersion', [$jeu])->with('success', 'La version a été assigné avec succès.');
        } catch (\Throwable $e) {

            Log::debug($e);
            return redirect()->route('jeux.modifierVersion', [$jeu])->withErrors(['Une erreur s\'est produite lors de l\' assignation de la version au jeu']);
        }



    }
    public function storeImage(ImagesRequest $request)
    {
        //

        try {
            //dd($request);
            $image = new image();
            $image->fill($request->except('_token'));
            $uploadedFile = $request->file('lien');
            $nomFichierUnique = str_replace('', '_', $image->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();
            try {
                $request->lien->move(public_path('img/jeux'), $nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreurlorsdutéléversementdufichier.", [$e]);
            }

            $image->lien = $nomFichierUnique;
            $image->save();
            return redirect()->route('jeux.image')->with('success', 'L\'image a été assigné avec succès.');
        } catch (\Throwable $e) {

            Log::debug($e);
            return redirect()->route('jeux.image')->withErrors(['Une erreur s\'est produite lors de l\' assignation de l\'image au jeu']);
        }



    }
    public function storeModifierImage(ImagesRequest $request, Jeu $jeu)
    {
        //

        try {
            //dd($request);
            $image = new image();
            $image->fill($request->except('_token'));
            $uploadedFile = $request->file('lien');
            $nomFichierUnique = str_replace('', '_', $image->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();
            try {
                $request->lien->move(public_path('img/jeux'), $nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreurlorsdutéléversementdufichier.", [$e]);
            }

            $image->lien = $nomFichierUnique;
            $image->save();
            return redirect()->route('jeux.modifierImage', [$jeu])->with('success', 'L\'image a été assigné avec succès.');
        } catch (\Throwable $e) {

            Log::debug($e);
            return redirect()->route('jeux.modifierImage', [$jeu])->withErrors(['Une erreur s\'est produite lors de l\' assignation de l\'image au jeu']);
        }



    }

    /**
     * Display the specified resource.
     */
    public function storeJeuCategorie(CategoriesResquest $request)
    {

        try {
            // dd($request);
            $jeu = Jeu::find($request->jeu_id);
            $categorie = categorie::find($request->categorie_id);


            if ($jeu->categories->contains($categorie)) {
                Log::debug("La relaion existe déjà");
            } else {
                $jeu->categories()->attach($categorie);
                $jeu->save();

            }
            return redirect()->route('jeux.categorie')->with('success', 'La catégorie a été assignée  avec succès.');
            ;

        } catch (\Throwable $e) {

            Log::debug($e);

            return redirect()->route('jeux.categorie')->withErrors(['Une erreur s\'est produite lors de l\'assignation de la catégorie']);
        }

    }
    public function commentaires(request $request, Jeu $jeu)
    {
        try {

            $jeu = Jeu::find($request->jeu_id);
            $usager = usager::find($request->usager_id);


            $commentaire = $request->commentaire;

            $usager->jeux()->attach($jeu, ['commentaire' => $commentaire, 'created_at' => date("Y-m-d", time())]);

            $usager->save();



            return redirect()->route('jeux.show', [$jeu])->with('success', 'Le commentaire a été ajouté  avec succès.');
            ;

        } catch (\Throwable $e) {

            Log::debug($e);

            return redirect()->route('jeux.show', [$jeu])->withErrors(['Une erreur s\'est produite lors de l\'ajout du commentaire']);
        }
    }
    public function storeModifierJeuCategorie(CategoriesResquest $request, Jeu $jeu)
    {

        try {
            // dd($request);
            $jeu = Jeu::find($request->jeu_id);
            $categorie = categorie::find($request->categorie_id);


            if ($jeu->categories->contains($categorie)) {
                Log::debug("La relaion existe déjà");
            } else {
                $jeu->categories()->attach($categorie);
                $jeu->save();

            }
            return redirect()->route('jeux.modifierCategorie', [$jeu])->with('success', 'La catégorie a été assignée  avec succès.');

        } catch (\Throwable $e) {

            Log::debug($e);

            return redirect()->route('jeux.modifierCategorie', [$jeu])->withErrors(['Une erreur s\'est produite lors de l\'assignation de la catégorie']);
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        try {
            $jeu = Jeu::findOrFail($id);

            $jeu->usagers()->detach();
            $jeu->categories()->detach();
            $jeu->images()->where('jeu_id', $id)->delete();
            $jeu->versions()->where('jeu_id', $id)->delete();


            $jeu->delete();
            return redirect()->route('jeux.index')->with('message', "Suppression de " . $jeu->nom . " réussi!");
        } catch (\Throwable $e) {
            //Gérerl'erreur
            Log::debug($e);
            return redirect()->route('jeux.index')->withErrors(['la suppression n\'a pas fonctionné']);
        }
        return redirect()->route('jeux.index');




    }
}
