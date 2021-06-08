<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\View;
  use App\Http\Models\Categorie;


  class CategoriesController extends Controller {
    /**
     * Affichage des catégories
     */
    public function index(){
      return response()->json(Categorie::all());
    }
  }
