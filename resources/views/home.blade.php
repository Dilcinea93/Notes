@extends('layout')
@section('title','Registrar')


@section('content')

              
              <form action="{{ route('temas.store') }}" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <span><h3><b>Categoria</b></h3></span>

                  <select name="categoria" id="categoria" class="form-control">
                    @foreach($categorias as $categories)
                      <option value="{!! $categories-> id!!}">
                        {!! $categories-> nombre!!}
                      </option>
                    @endforeach
                  </select>
                
                <label for="titulo"><h3><b>Titulo: </b></h3></label>
                <input type="text" name="titulo" class="form-control" >
                            <textarea class="ckeditor" name="post" id="editor1" rows="10" cols="80" placeholder="Escribe aqui la informacion del POST">
                            </textarea>

                            <button class="btn btn-success btn-block" type="submit">REGISTRAR</button>
                        </form>
@endsection

