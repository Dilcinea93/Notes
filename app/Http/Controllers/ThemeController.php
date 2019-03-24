<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\temas;

use App\libro;

use App\categoria;
class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=categoria::all();
        $posts=temas::take(3)->orderBy('id', 'desc')->get();
        // $temas=temas::orderBy('id','DESC')->paginate(3);
        return view('home',compact('categorias','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id) //una ruta show de un contrlador tipo resource recibe un parametro ID, no un request, ya que no puede recuperar los datos de Request. Si lo haces con request e intentas recuperar un dato del request como si esta fuera una ruta de una peticion get o post normal ( no resource, asi $request['titulo']) te dara error..
    {
         $posts=temas::where('id', $id)->get();

         //pero todavia no logro renderizar el resultado en la misma pagina
        return view('info',compact('posts','titulo'));
    }

    public function store(Request $request)
    {
        //
        // $this->validate($request,[ 'nombre'=>'required', 'resumen'=>'required', 'npagina'=>'required', 'edicion'=>'required', 'autor'=>'required', 'npagina'=>'required', 'precio'=>'required']);
        temas::create(['titulo' => $request['titulo'], 
        'post'=> $request['post'],
        'categoria_id'=> $request['categoria'],
        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // RUTA GET. Si hago una peticion POST a esta ruta, de bolas que tendre MethodNotAllowed (405)
    {
        $categorias=categoria::all();
        $temas=temas::find($id);
        return view('edit',compact('temas','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        temas::find($id)
        ->update(
            ['titulo' => $request['titulo'], 
            'post'=> $request['post'],
            'categoria_id'=> $request['categoria'],
            ]);
        return redirect()->route('home')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        temas::find($id)->delete();
        return redirect()->route('home')->with('success','Registro eliminado satisfactoriamente');
    }

     public function search(Request $request){
        $resultados= temas::where('titulo','like', '%'.$request['search'].'%')

    ->orWhere('post','like', '%'.$request['search'].'%')
        ->get();      
// $temas=temas::orderBy('id','DESC').paginate(3)

$cantidad= count($resultados);

        return view('lista',compact('resultados','cantidad'));
    }

     public function listado(Request $request){
        $resultados=temas::where('categoria_id', $request['id'])->get();
        
$cantidad= count($resultados);

        return view('lista',compact('resultados','cantidad'));
    }

    public function results(Request $request){
        $posts=temas::where('id', $request['id'])->get();
        return view('info',compact('posts','titulo'));
    }
    public function falta(){
        return view('falta');
    }
}
