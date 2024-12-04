<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JeuxControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        return view('jeux.index');
    }
    
    public function categories()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        return view('jeux.categories');
    }
    public function login()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        return view('jeux.login');
    }
    public function details()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        return view('jeux.anime-details');
    }
    public function watching()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        return view('jeux.anime-watching');
    }
    public function blogDetails()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        return view('jeux.blog-details');
    }
    public function blog()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        return view('jeux.blog');
    }

    public function sign()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        return view('jeux.signup');
    }
    public function contact()
    {
        //select pour aller chercher tous les jeux
        //jeux= allGames();
        return view('jeux.contact');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
