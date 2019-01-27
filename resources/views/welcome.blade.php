@extends('layout')
@section('title','Registrar')


@section('content')
              
              <form action="{{url('/guardar')}}" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <span>Categoria</span>
                <select name="categoria" id="categoria" class="form-control">
                  @foreach($categorias   as $categories)
                    <option value="1">
                      {!! $categories-> nombre!!}
                    </option>
                  @endforeach
                </select>
                <label for="titulo">TITULO: </label>
                <input type="text" name="titulo" class="form-control" >
                            <textarea class="ckeditor" name="post" id="editor1" rows="10" cols="80">
                                Este es el textarea que es modificado por la clase ckeditor
                            </textarea>

                            <button class="btn btn-info btn-block" type="submit">REGISTRAR INFORMACION</button>
                        </form>
@endsection

