<?php
 namespace App\Http\Models;

 use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

 class Categorie extends Model {

   use CrudTrait;

 /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
  protected $table = 'categories';
  // protected $primaryKey = 'id';
  // public $timestamps = false;
  protected $guarded = ['id'];
  protected $fillable = ['nom'];
  // protected $hidden = [];
  // protected $dates = [];


  /*
  |--------------------------------------------------------------------------
  | FUNCTIONS
  |--------------------------------------------------------------------------
  */
   public function patisseries() {
       return $this->hasMany('App\Http\Models\Patisserie');
   }
 }
