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
        $recent=temas::orderBy('id', 'desc')->get();
      
        //$temas=temas::orderBy('id','DESC')->paginate(3);


        return view('home',compact('categorias','recent'));
    }

    public function search(Request $request)
    {
        $resultados= temas::where('titulo','like', '%'.$request['search'].'%')
        ->orWhere('post','like', '%'.$request['search'].'%')->paginate(4);
        $cantidad_posts= count($resultados);

        foreach($resultados as $resultado){

            $title_post=$resultado->titulo;
            $post_title=explode(' ',$title_post); //array con palabras distintas de cada titulo

            for ($i=0; $i < count($post_title); $i++) { 
                # code...
                if($post_title[$i]==$request['search'] || $post_title[$i]== strtoupper($request['search'])){
                    $post_title[$i]='<b> '.$request['search'].'</b>';
                    $title_post= implode($post_title);
                    $resultado->titulo=$title_post;
                }
            }
        }

        $palabra= $request['search'];
        $cantidad= count($resultados);
        return view('lista',compact('resultados','cantidad','palabra','title_post'));
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
    public function destroy($id)
    {

        temas::find($id)->delete();
        return redirect()->route('home')->with('success','Registro eliminado satisfactoriamente');
    }

    public function edit($id) // RUTA GET. Si hago una peticion POST a esta ruta, de bolas que tendre MethodNotAllowed (405)
    {
        $categorias=categoria::all();
        $temas=temas::find($id);
        return view('edit',compact('temas','categorias'));
    }

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

    public function listado(Request $request)
    {
        $resultados=temas::where('categoria_id', $request['id'])->orderBy('id', 'DESC')->paginate(4);
        $cantidad= count($resultados);
        $post_txt='';
        
        // dd($resultados);
        $recent=temas::orderBy('id', 'desc')->get();
        return view('lista',compact('resultados','cantidad','recent'));
    }

    public function results(Request $request)
    {
        $recent=temas::orderBy('id', 'desc')->get();
        $postss=temas::where('id', $request['id'])->get();
        return view('info',compact('postss','recent'));
    }
     //una ruta show de un contrlador tipo resource recibe un parametro ID, no un request, ya que no puede recuperar los datos de Request. Si lo haces con request e intentas recuperar un dato del request como si esta fuera una ruta de una peticion get o post normal ( no resource, asi $request['titulo']) te dara error..
        // {
        //     $posts=temas::where('id', $id)->get();
        //     return view('info',compact('posts'));
        // } 

    public function respaldo()
    {
        // $posts=temas::where('id', $request['id'])->get();
        // return view('info',compact('posts'));
    }
}
