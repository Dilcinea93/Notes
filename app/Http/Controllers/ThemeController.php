<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\temas;
use App\cursoModel;
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
        $cursos=cursoModel::all();
        $posts_temas=temas::orderBy('id', 'desc')->get();
        return view('home',compact('categorias','posts_temas','cursos'));
    }

    public function search(Request $request,$id=null,$curso=null)
    {
        $posts='';
        $palabra='';
        $title_post='';
        $posts=temas::orderBy('id', 'desc')->get();
           if($id!=null){
            if($id==00){
                $resultados_get= cursoModel::get();//trae una coleccion
                $resultados_p=cursoModel::paginate(3);//trae una instancia de paginador
                $curso=$id;
            }else{
                $resultados=temas::where('categoria_id',$request['id']);
                $resultados_get= $resultados->get();
                $resultados_p= $resultados->paginate(3);
            }
        }
            if($request['search']!=null){
              
            $resultados= temas::where('titulo','like', '%'.$request['search'].'%')
            ->orWhere('post','like', '%'.$request['search'].'%');
            $resultados_get= $resultados->get();
            $resultados_p=$resultados->paginate(3);
    
            if($resultados_get){
                foreach($resultados_get as $resultado){
    
                    $title_post=$resultado->titulo;
                    $post_title=explode(' ',$title_post); //array con palabras distintas de cada titulo
        
                    for ($i=0; $i < count($post_title); $i++) { 
                        # code...
                        if($post_title[$i]==$request['search'] || $post_title[$i]== strtoupper($request['search'])){
                            $post_title[$i]=' <b> '.$request['search'].'</b>';
                            $title_post= implode($post_title);
                            $resultado->titulo=$title_post;
                        }
                    }
                }
            }
              
        $palabra= $request['search'];
        }
        
        $cantidad= count($resultados_get);
        return view('lista',compact('resultados_p','resultados_get','cantidad','palabra','posts','title_post'));
        // return view('lista')->with(
        //     Arr::collapse(['resultados']));
            /* como hago para enviarle a la vista una sola coleccion que almacene lo que se vaya guardando con el mismo nombre? 
                coloca la palabra, el post, el titulo..
            */
    }

    public function store(Request $request)
    {
        if($request['select_curso']=='on'){//si se esta creando un nuevo curso
            cursoModel::create(['titulo' => $request['nombre_curso']]);
            $id_ultimo_curso=cursoModel::get();
            temas::create([
                'curso_id'=> $id_ultimo_curso->last()->id,
                'titulo' => $request['titulo'], 
                'post'=> $request['post']
            ]);
        }else{
            if($request['curso']){//si el tema va asociado a un curso
                temas::create(['titulo' => $request['titulo'], 
                'post'=> $request['post'],
                'curso_id'=> $request['curso'],
                ]);
            }elseif($request['categoria']){//si el tema es de una categoria
                temas::create(['titulo' => $request['titulo'], 
                'post'=> $request['post'],
                'categoria_id'=> $request['categoria'],
                ]);
            }
        }
        return redirect()->route('temas.index');
    }

    public function elimina_registros(Request $request){
        $ids=$request->id_registro;
        $registros = \collect($ids)
        ->map(function($id){
            $registro_a_borrar=temas::where('id', $id);
            $registro_a_borrar->delete();
        });
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

    public function listado(Request $request, $cat, $curso= null)
    {
        //dd($curso);
        $posts=temas::orderBy('id', 'desc')->get();
        if($curso!=null){
            if($curso!=1){
                $resultados=temas::where('curso_id', $request['id'])->paginate(3);
                }
        }else{
            $resultados=temas::where('categoria_id',$request['id'])->paginate(3);
        }
        
                $cantidad= count($resultados);
        $post_txt='';
        // dd($resultados);
        return view('lista',compact('resultados','cantidad','posts','curso'));
    }

    
    public function show($id) //una ruta show de un contrlador tipo resource recibe un parametro ID, no un request, ya que no puede recuperar los datos de Request. Si lo haces con request e intentas recuperar un dato del request como si esta fuera una ruta de una peticion get o post normal ( no resource, asi $request['titulo']) te dara error..
    {//muestra el contenido del post seleccionado
            $posts=temas::where('id', $id)->get();
            $posts_temas= temas::orderBy('id', 'desc')->get();
            foreach($posts as $post){
                if($post->curso_id==NULL){
                    $curso=1;
                }else{$curso=0; 
                }
            }
        return view('info',compact('posts','posts_temas','curso'));
    }

    public function massivedelete(Request $request){
        //recibe los ID de los post a eliminar
        dd($request);
        $cantidad= $request.count();
      //for($i=0;$i<$cantidad;$i++){
            temas::where(['id'=>$request['id']])->delete();
        //}
    }
}
