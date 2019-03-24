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
                <input type="text" name="titulo" id="titulo" class="form-control" >
                            <textarea class="ckeditor" name="post" id="editor1" rows="10" cols="80" placeholder="Escribe aqui la informacion del POST">
                            </textarea>

                            <button class="btn btn-success btn-block save" type="submit">REGISTRAR</button>
                        </form>
@endsection

<script type="text/javascript">

  $(document).on('click','.save',function(){
    var texto= $('#editor1').val();
     $.ajax({
      type: 'POST',
      url: 'temas',
      data: {

                    '_token': $('input[name=_token]').val(),
                    'categoria': $("#categoria").val(),
                    'titulo': $('#titulo').val(),
                    // 'post': $('#editor1').val() no se porque no captura este dato pero es por la clase ckeditor.... si le quito la clase, si lo guarda. 
                }
     });
  });
    </script>