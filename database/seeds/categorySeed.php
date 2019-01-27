<?php

use App\categoria;
use Illuminate\Database\Seeder;

class categorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        categoria::create([
        	'nombre'=>'HTML'
        ]);

        categoria::create([
        	'nombre'=>'PHP'
        ]);
        categoria::create([
        	'nombre'=>'Idiomas'
        ]);
        categoria::create([
        	'nombre'=>'C#'
        ]);

        categoria::create([
        	'nombre'=>'Errores'
        ]);
    }
}
