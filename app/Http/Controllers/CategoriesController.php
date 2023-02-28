<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriesController extends Controller
{
    /*
     * afficher la liste des produits
     */
    public function index() 
    {
        $categories = Categories::all();
        return view('portion.categorie', compact('categories'));
    }

  /*
     * retourne le formulaire de creation de categorie
     */
    public function create() 
    {
        return view('admin.categorie_add');
    }

   /*
     * enregistrer la catégorie en base de donnée
     */
    public function store(Request $request) 
    {
        Categories::create([
            'name' => $request->name, 
        ]);

        return redirect()->route('dashboard.categorie_list');

    }

  /*
     * retourne le formulaire d'edition de categorie
     */
    public function edit(Request $request) 
    {
        $categorie = Categories::find($request->id);
        return view('admin.modification', compact('categorie'));

    }

   /*
     * Mettre à jour une categorie
     */
    public function update(Request $request) 
    {
        $categorie = Categories::find($request->id);
        $categorie->update([
            'name' => $request->name
        ]);
        return redirect()->route('dashboard.categorie_list');
    }

   /*
     * Suprimmer une categorie
     */
    public function destroy(Request $request) 
    {
        $categorie = Categories::find($request->id);
        $categorie->delete(); 
        return redirect()->back()->with('error', 'la catégorie '.$categorie->name.' ainsi que tous les produits associés ont été supprimé')->withInput();

    }
}
