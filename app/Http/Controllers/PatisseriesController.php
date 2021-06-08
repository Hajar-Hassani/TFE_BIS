<?php
 namespace App\Http\Controllers;

 use Illuminate\Support\Facades\View;
 use App\Http\Models\Patisserie;

 class PatisseriesController extends Controller {
   /**
    * Affichage des patisseries
    */
    public function index(){
       return response()->json(Patisserie::with('categories')->get());
     }
 }
