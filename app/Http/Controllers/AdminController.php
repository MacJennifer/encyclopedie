<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {

        $users = User::all();
        $heroes = Hero::all();

        return view('admin.dashboard', compact('users', 'heroes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function createHero()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function storeHero(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'image'=> 'required',
            'gender'=> 'required',
            'race'=> 'required',
            'description'=> 'required'

        ]);

       hero::create([
                'name' => $request->name,
                'image' => $request->image,
                'gender' => $request->gender,
                'race' => $request->race,
                'description' => $request->description

       ]);

        // Redirigez avec un message de succès
        return redirect()->route('admin.dashboard')->with('hero-success', 'Héros créé avec succès');
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
    public function edit(string $id, Request $request)
    {

        $hero = Hero::findOrFail($id);


        return view('admin.edit', compact('hero'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hero = Hero::findOrFail($id);
        $hero->name = $request->input('name');
        $hero->image = $request->input('image');
        $hero->description = $request->input('description');

        $hero->save();


        return redirect()->route('admin.dashboard')->with('hero-success', 'Héro mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérez l'utilisateur à partir de l'ID
        $user = User::find($id);

        // Vérifiez si l'utilisateur existe
        if ($user) {
            $user->delete();
            session()->flash('user-success', 'Utilisateur supprimé avec succès');
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.dashboard')->with('error', 'L\'utilisateur n\'a pas été supprimé');

    }

    public function destroyHeroes(string $id)
    {
         $hero = Hero::find($id);

        // Vérifiez si le héros existe
        if ($hero) {
            $hero->delete();
            session()->flash('hero-success', 'Héros supprimé avec succès');
            return redirect()->route('admin.dashboard');
        }

        // Si ni l'utilisateur ni le héros n'existent, retournez une erreur
        return redirect()->route('admin.dashboard')->with('error', 'Le héro n\'a pas été supprimé');
    }


}
