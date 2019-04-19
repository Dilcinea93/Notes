@extends('layouts.layout')
@section('title','Registrar')


@section('content')
 <script type="text/javascript">

  $(document).on('click','.registrar',function(){
    var texto= $('#editor1').val();
    console.log(texto);
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
              
              <form method="post" action="{{url('save')}}" role="form">
                {{ csrf_field() }}
                <span><h3><b>Categoria</b></h3></span>

                  <select name="categoria" id="categoria" class="form-control" value="">
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

                            <button type="submit"class="btn btn-success btn-block">REGISTRAR</button>
 </form>
@endsection

