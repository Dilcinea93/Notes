<?php

namespace App;

use App\temas;
use App\cursoModel;
use App\categoria;
use Illuminate\Database\Eloquent\Model;

class temas extends Model
{
    //
    protected $table = 'tema';

   protected $fillable  = ['id','titulo','post','categoria_id','curso_id'];
  	public function categoria(){
  		return $this->belongsTo(categoria::class);
      }
      public function curso(){  //el tema le pertenece a un curso. 
        return $this->belongsTo(cursoModel::class,'curso_id');
  }
}
