
 
<div class="footer bg-dark" id="footer">
  
<div class="row p-4">
    <div class="col-3">
      <label class="bold control-label" style="color:white;font-weight: bold">RECENT POSTS</label>

    </div>

    <div class="col-5" id="massive">
    
      <label style="color:white;">Eliminacion masiva</label>
       <input type="checkbox" id="massive" @click="viewdeletes()" v-model="deletes">
      &nbsp;
      <span v-if="deletes" style="color:white;">
        Seleccionar todos
      </span>
      &nbsp; <input type="checkbox" v-show="deletes" @click="select_all()"  v-model="isCheckAll">
          <button class="btn btn-default" v-show="deletes" type="submit">Eliminar</button>

    </div>

  </div>

  <div class="row ">
    <div class="col-12  p-3">
<form action="{{ url('elimina_registros') }}" class="form-horizontal" method="POST">
{{ csrf_field() }}
<!-- @csrf le estaba enviando el token asi y no el campo {{ csrf_field() }}, por lo que me daba un error 
ique mistmatch token exception, ique The page has expired due to inactivity, refresh and try againn.
En el otro sistema me funciono el token porque .... no se... jjaja
solo,  si no te funciona el token, prueba con el campo
 -->
                      @if(!empty($posts_temas))
                         
                          <div class="row">
                              @foreach($posts_temas as $posts_tema)
                              <input type="hidden" v-model="elements[]" value="{!! $posts_tema->id !!}">
                       
                              <ul style="list-style: none;">
                                <li >
                                  <label>
                                    
                                  <a style="color:lightblue;" href="{{route ('temas.show',['id' => $posts_tema->id])}}"> {!! $posts_tema->titulo!!}</a>
      &nbsp;&nbsp;<input type="checkbox" id="id_registro" name="elements[]" v-bind="id_elemento"  v-if="deletes">
                                  </label>
                                </li>
                              </ul>
                              @endforeach
                     
                     </div>
                        @else
                          <h2>Aun no hay ningun post</h2>
                        @endif
                        </div>

    </form>

                        </div>

</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <center>
      <label> Creado por Yohanna Padrino. 2019</label>
      </center>
    </div>
  </div>
</div>

    <script>
//Como hago que al volver a seleccionar "eliminacion masiva" se desaparezcan los chechbox?
var massive = new Vue({
  el: '#footer',
  data:{
    elements: [],
    isCheckAll: false,
    deletes: false,
    str:'asdas'
  },
  methods: {
    select_all: function(){
      //this.id_elemento = !this.id_elemento;
      this.isCheckAll=true;
      //this.elements = [];
      for(var i = 0; i < this.elements.length; i++)
               this.elements[i].checked=true;
          //this.elements.push(this.id_elemento[i]);
    }
    ,
    viewdeletes: function(){
      this.deletes=true;
    },
    updateCheckall: function(){
      console.log(this.elements);
      if(this.elements.length==0){
         this.id_elemento = true;
      }else{
         this.id_elemento = false;
      }
    },

  }
});
</script>