<?php

namespace App;

use App\temas;
use App\categoria;
use Illuminate\Database\Eloquent\Model;

class temas extends Model
{
    //
    protected $table = 'tema';

   protected $fillable  = ['id','titulo','post','categoria_id'];
  	public function categoria(){
  		return $this->belongsTo(categoria::class);
  	}
}
