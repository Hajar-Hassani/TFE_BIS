<?php
 namespace App\Http\Models;

 use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

 class Avi extends Model {

   use CrudTrait;

 /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
   protected $table = 'avis';
   // protected $primaryKey = 'id';
   // public $timestamps = false;
   protected $guarded = ['id'];
   protected $fillable = ['nom', 'texte'];
   // protected $hidden = [];
   // protected $dates = [];


   /*
   |--------------------------------------------------------------------------
   | FUNCTIONS
   |--------------------------------------------------------------------------
   */

 }
