<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ce controller contient les methode d'affichage des vue de l'interface client

    // méthode ne retournant que les produit visible sur l'interface admin
    private function visibleProduct(){
        return Products::where('publish',1);
    }

    public function all(){
        //retourne tous les produits
        $products = $this->visibleProduct()->paginate(6);
        $categories = Categories::all();
        return view('welcome',compact(['products','categories']));
    }

    public function product_status(){
        //retourne tous les produits en solde
        $products = $this->visibleProduct()->where('product_status',1)->paginate(6);
        $categories = Categories::all();
        return view('welcome',compact(['products','categories']));
    }

    public function sortByCategorie($id){
        //trie les produit par categorie
        $products = $this->visibleProduct()->where('categorie_id',$id)->paginate(6);
        $categories = Categories::all();
        return view('welcome',compact(['products','categories']));
    }

    public function show($id){
        //affiche un produit
        $product = Products::find($id);
        $categories = Categories::all();
        return view('portion.clothes',compact(['product','categories']));
    }

}
