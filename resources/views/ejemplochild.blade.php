@extends('layouts.layout')
@section('title','Registrar')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

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
            
  
              <form method="post" action="{{route('temas.store')}}" role="form" >
              <div id="app">
                {{ csrf_field() }}
                <div id="categorias_desc" v-if="label_category">
                  <span id="category_name"><h3><b>Categoria</b></h3></span>

                   
                </div>  
                <div>Asociar a curso: 
                 
                </div>
                  <label>Curso</label> <input type="checkbox" name="select_curso" v-on:change="curso()"> 
                  <input type="text" name="nombre_curso" id="nombre_curso" class="form-control" >
                  </div>
                  <label for="titulo"><h3><b>Titulo: </b></h3></label>
                  <input type="text" name="titulo" id="titulo" class="form-control" >
                
                            <textarea class="ckeditor" name="post" id="editor1" rows="10" cols="80" placeholder="Escribe aqui la informacion del POST">
                            </textarea>

                            <button type="submit"class="btn btn-success btn-block">REGISTRAR</button>
 </form>
 <script>
var form = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
  label_category:true,
  select_category:true,
  },
  methods:{
    curso: function(){
      this.select_category=false;
      this.label_category=false;
    }
  }
})
      
</script> 
@endsection



