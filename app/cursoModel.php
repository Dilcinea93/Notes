<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\temas;
class cursoModel extends Model
{
    //
    protected $table='curso_models';
    protected $fillable=['titulo','curso_id'];

    public function temas(){//el curso puede tener varios temas..... el tema le peertenece a un solo curso
  		return $this->hasMany(temas::class,'id');
    }
}
