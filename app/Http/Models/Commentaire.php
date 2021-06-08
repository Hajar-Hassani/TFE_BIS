<?php
  namespace App\Http\Models;

  use Illuminate\Database\Eloquent\Model;
  use Backpack\CRUD\app\Models\Traits\CrudTrait;

  class Commentaire extends Model {

    use CrudTrait;

  /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */
  protected $table = 'commentaires';
  // protected $primaryKey = 'id';
  // public $timestamps = false;
  protected $guarded = ['id'];
  protected $fillable = ['pseudo', 'texte', 'patisseries'];
  // protected $hidden = [];
  // protected $dates = [];


  /*
  |--------------------------------------------------------------------------
  | FUNCTIONS
  |--------------------------------------------------------------------------
  */

  public function patisserie(){
        return $this->belongsTo('App\Http\Models\Patisserie', 'patisseries');
    }
  }
