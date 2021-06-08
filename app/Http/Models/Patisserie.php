<?php
 namespace App\Http\Models;

 use Illuminate\Database\Eloquent\Model;
 use Backpack\CRUD\app\Models\Traits\CrudTrait;

 class Patisserie extends Model {

   use CrudTrait;

 /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
  protected $table = 'patisseries';
  // protected $primaryKey = 'id';
  // public $timestamps = false;
  protected $guarded = ['id'];
  protected $fillable = ['nom', 'image', 'description', 'categories_id'];
  // protected $hidden = [];
  // protected $dates = [];

  /*
  |--------------------------------------------------------------------------
  | FUNCTIONS
  |--------------------------------------------------------------------------
  */
   public function categories(){
       return $this->belongsTo('App\Http\Models\Categorie');
   }

   public function commentaire(){
     return $this->hasMany('App\Htpp\Models\Commentaire', 'patisserie');
   }

   /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    //Upload d'images des projets
    public function setImageAttribute($value) {
      $attribute_name = "image";
      $disk = "medias";
      $destination_path = "";
      // if the image was erased
      if ($value==null) {
        // delete the image from disk
        \Storage::disk($disk)->delete($this->{$attribute_name});

        // set null in the database column
        $this->attributes[$attribute_name] = null;
      }

      // if a base64 was sent, store it in the db
      if (starts_with($value, 'data:image'))
      {
        // 0. Make the image
        $image =\Image::make($value)->encode('jpg', 90);
        // 1. Generate a filename.
        $filename = md5($value.time()).'.jpg';
        // 2. Store the image on disk.
        \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
        // 3. Save the path to the database
        $this->attributes[$attribute_name] = $filename;
      }
    }
 }
