<?php
 namespace App\Http\Models;

 use Illuminate\Database\Eloquent\Model;
 use Backpack\CRUD\app\Models\Traits\CrudTrait;

 class Contact extends Model {
   
   use CrudTrait;

  /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */
   protected $table = 'contacts';
   // protected $primaryKey = 'id';
   // public $timestamps = false;
   protected $guarded = ['id'];
   protected $fillable = ['nom', 'email', 'telephone', 'message'];
   // protected $hidden = [];
   // protected $dates = [];

   /*
   |--------------------------------------------------------------------------
   | FUNCTIONS
   |--------------------------------------------------------------------------
   */

 }
