<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Models\Avi;


class AvisController extends Controller {
  /**
   * Affichage des commentaires
   */
   public function index() {
     return response()->json(Avi::all());
   }
}
