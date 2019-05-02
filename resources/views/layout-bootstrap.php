

 <!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title') - DigiNote</title>
    <!-- Icons-->
    <!-- Main styles for this application-->
    <link href="http://localhost/guias/public/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://localhost/guias/public/js/jquery.min.js"></script>
 <script src="http://localhost/guias/public/js/bootstrap.min.js"></script>
    <!-- <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet"> -->
    <script src="http://localhost/guias/public/js/funciones.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>

</head>
<style type="text/css">
    div{
        border:1px solid green;
    }
</style>
<body>
    <div class="container-fluid" style="background: #E2D3E4">
<h1>Estas columnas son col-MD. Se apilan en pantallas peque;as, y se apilan horizontalmente (stack to horizontal) en pantallas de escritorio</h1>
<div class="row"> 
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 " >.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
  <div class="col-md-1 ">.col-md-1</div>
</div>
<div class="row">
  <div class="col-md-8 ">.col-md-8</div>
  <div class="col-md-4 ">.col-md-4</div>
</div>
<div class="row">
  <div class="col-md-4 ">.col-md-4</div>
  <div class="col-md-4 ">.col-md-4</div>
  <div class="col-md-4 ">.col-md-4</div>
</div>
<div class="row">
  <div class="col-md-6 ">.col-md-6</div>
  <div class="col-md-6 ">.col-md-6</div>
</div>
</div>

<h1>CONTAINER FLUID</h1>
<p>El container fluid se adapta a la anchura de la ventana, mientras que el container pelao, solo es ancho por su contenido creo</p>

<div class="container-fluid" style="border: 1px solid black">
  <div class="row">


  </div>
<h1> esta combinacion de col XS y MD es para que no se apilen una sobre otra en pantallas peque;as... Lo que no se es porqie hay que poner XS y MD. No basta con uno solo? vamos a ver... Bueno, creo que es para adaptarlo a como se va a ver aqui y alla....</h1>
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
  <div class="col-xs-12 col-md-8 col-sm-6">.col-xs-12 .col-md-8</div>
  <div class="col-xs-6 col-md-4 col-sm-3">.col-xs-6 .col-md-4</div>
</div>

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
  <div class="col-xs-6">.col-xs-6</div>
  <div class="col-xs-6">.col-xs-6</div>
</div>

</div>
<h1>
Example: Column wrapping
    
</h1>
If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.

.col-xs-9.col-xs-4
Since 9 + 4 = 13 > 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit..col-xs-6
Subsequent columns continue along the new line.
<div class="row">
  <div class="col-xs-9">.col-xs-9</div>
  <div class="col-xs-4">.col-xs-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
  <div class="col-xs-6">.col-xs-6<br>Subsequent columns continue along the new line.</div>
</div>

<h1>OFFSET</h1>

<div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
</div>
<div class="row">
  <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
  <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
</div>

<h1>etiquetas de texto</h1>

<p class="text-left">Left aligned text.</p>
<p class="text-center">Center aligned text.</p>
<p class="text-right">Right aligned text.</p>
<p class="text-justify">Justified text.</p>
<p class="text-nowrap">No wrap text.</p>
<p class="text-lowercase">Lowercased text.</p>
<p class="text-uppercase">Uppercased text.</p>
<p class="text-capitalize">Capitalized text.</p>
<abbr title="attribute">attr</abbr> <br>
<address>
  <strong>Twitter, Inc.</strong><br>
  1355 Market Street, Suite 900<br>
  San Francisco, CA 94103<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address><br>
<abbr title="HyperText Markup Language" class="initialism">HTML</abbr>
<br>
<h4>Para descripciones</h4>
<dl>
  <dt>A;g[[[</dt>
  <dd>slhooo msd</dd>

  <dt>A;g[[[</dt>
  <dd>slhooo msd</dd>
</dl>
<br>

CODE> 
For example, <code>&lt;section&gt;</code> should be wrapped as inline.

<br>

<h3>entrada del usuario</h3>

To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
<blockquote>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>


<br>
<h2>Bloque basice</h2>

<pre>
    
    <code>
        Yohanna
    </code>
</pre>


<h1>TABLAS</h1>

<table class="table table-hover">
    
    <!-- On rows -->
<tr class="active">...</tr>
<tr class="success">...</tr>
<tr class="warning">...</tr>
<tr class="danger">...</tr>
<tr class="info">...</tr>

<!-- On cells (`td` or `th`) -->
<tr>
  <td class="active">...</td>
  <td class="success">...</td>
  <td class="warning">...</td>
  <td class="danger">...</td>
  <td class="info">...</td>
</tr>

</table>

<h2>FORMULARIOS</h2>


<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<mark>Con clase INLINE</mark>

<form class="form-inline">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>
  <button type="submit" class="btn btn-default">Send invitation</button>
</form>

<form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
      <div class="input-group-addon">.00</div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Transfer cash</button>
</form>

Entradas
Control de formulario más común, campos de entrada basados ​​en texto. Incluye soporte para todo tipo de HTML5: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, y color.

Declaración de tipo requerida
Las entradas solo tendrán un estilo completo si typese declaran correctamente.

<br>

<br>

<br>

<br>
<h1>FORMULARIO CON COLORES DE AYUDA EN UINPUTS</h1>

<div class="form-group has-success">
  <label class="control-label" for="inputSuccess1">Input with success</label>
  <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2">
  <span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
<div class="form-group has-warning">
  <label class="control-label" for="inputWarning1">Input with warning</label>
  <input type="text" class="form-control" id="inputWarning1">
</div>
<div class="form-group has-error">
  <label class="control-label" for="inputError1">Input with error</label>
  <input type="text" class="form-control" id="inputError1">
</div>
<div class="has-success">
  <div class="checkbox">
    <label>
      <input type="checkbox" id="checkboxSuccess" value="option1">
      Checkbox with success
    </label>
  </div>
</div>
<div class="has-warning">
  <div class="checkbox">
    <label>
      <input type="checkbox" id="checkboxWarning" value="option1">
      Checkbox with warning
    </label>
  </div>
</div>
<div class="has-error">
  <div class="checkbox">
    <label>
      <input type="checkbox" id="checkboxError" value="option1">
      Checkbox with error
    </label>
  </div>
</div>

<div class="form-group has-success has-feedback">
  <label class="control-label" for="inputSuccess2">Input with success</label>
  <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  <span id="inputSuccess2Status" class="sr-only">(success)</span>
</div>
<div class="form-group has-warning has-feedback">
  <label class="control-label" for="inputWarning2">Input with warning</label>
  <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
  <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
  <span id="inputWarning2Status" class="sr-only">(warning)</span>
</div>
<div class="form-group has-error has-feedback">
  <label class="control-label" for="inputError2">Input with error</label>
  <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status">
  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  <span id="inputError2Status" class="sr-only">(error)</span>
</div>
<div class="form-group has-success has-feedback">
  <label class="control-label" for="inputGroupSuccess1">Input group with success</label>
  <div class="input-group">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
  </div>
  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
</div>

</body>
</html>