@extends('layout')
@section('title','Editar post')

@section('content')

                {{ csrf_field() }}

							<input name="_method" type="hidden" value="PATCH">

<!-- No se para que es este campo patch, pero si lo quito me da error de methodNotAllowed. Dice No Message -->

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <span>Categoria</span>

                  <select name="categoria" id="categoria" class="form-control">
                    @foreach($categorias as $categories)
                      <option value="{!! $categories-> id!!}">
                        {!! $categories-> nombre!!}
                      </option>
                    @endforeach
                  </select>
                
                <label for="titulo">TITULO: </label>
                <input type="text" name="titulo" class="form-control" value="{{$temas->titulo}}">
                            <textarea class="ckeditor" name="post" id="editor1" rows="10" cols="80">
                            	{{$temas->post}}
                            </textarea>

                            <button class="btn btn-info btn-block" type="submit">Actualizar</button>
                    
@endsection

<!-- 
pon boton eliminar -->