<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Models\Commentaire;


class CommentairesController extends Controller {
  /**
   * Affichage des commentaires
   */
   public function index() {
     return response()->json(Commentaire::all());
   }

  /**
    *Ajouter un commentaires
    */
  public function store(Request $request){
    $commentaire = Commentaire::create($request->all());
    return response()->json($commentaire);
  }
}
