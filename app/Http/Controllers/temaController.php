<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

use App\temas;
use App\categoria;
class temaController extends Controller
{
    //
    public function index(){
        $categorias=categoria::all();
        $posts=temas::take(3)->orderBy('id', 'desc')->get();

        // View::make('welcome', $categorias);
        return view('welcome',compact('categorias','posts'));
    }

    public function store(Request $request){

//dd($request);
    	// $this->validate($request, [
     //    'titulo' => 'required|unique:posts|max:255',
     //    'post' => 'required',
   		//  ]);

    	$registroTema = temas::create(
        ['titulo' => $request['titulo'], 
        'post'=> $request['post'],
        'categoria_id'=> $request['categoria'],
        ]);

        return redirect()->route('home');

    //     o tambien asi:

    //      $registro = new App\registro;

    // /* Realizamos la asignación masiva */
    // $registro->NombreEmpresa = $requests['NombreEmpresa'];
    // $registro->Ruc = $request['Ruc'];
    // $registro->DireccionPrincipal = $request['DireccionPrincipal'];
    // /**
    //  * Se repite con los demás datos que desees asignar...
    //  */

    // $registro->save();
    }
    public function results(Request $request){
        $posts=temas::where('id', $request['id'])->get();

        return view('info',compact('posts','titulo'));
    }

    public function search(Request $request){
        // $search=temas::where('titulo','like', $request['search'])->get();
        $search= DB::table('tema')
        ->where('titulo','like', '%'.$request['search'].'%')

        ->get();
        return view('resultados',compact('search'));
    }
    public function falta(){
        return view('falta');
    }
    public function listado(Request $request){
$resultados=temas::where('categoria_id', $request['id'])->get();

        return view('lista',compact('resultados'));
    }

    public function edit(){
         return view('welcome',compact('categorias','posts','titulo'));
    }
}
