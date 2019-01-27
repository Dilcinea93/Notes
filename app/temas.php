<?php

namespace App;

use App\temas;
use Illuminate\Database\Eloquent\Model;

class temas extends Model
{
    //
    protected $table = 'tema';

   protected $fillable  = ['id','titulo','post','id_c'];

}
