    @extends('principal')
    @section('contenido')
        <template v-if="menu==0">
             <H1>Escritorio</H1>
        </template>

        <template v-if="menu==1">
        <example-component></example-component>
          </template>

        <template v-if="menu==2">
            <h1>Contenido del menú 2</h1>
        </template>

        <div v-if="menu==3" class="container">
      <div class="row" style="margin-top:120px;">
        <div class="col-md-offset-3 col-md-6">

          @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
              <h4 style="..."><i class="icon fa fa-ban"></i>{{Session('success')}}</h4>
            </div>
          @endif

          <form action="{{ url('enviarCorreo') }}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="inputEmail">Correo:</label>
              <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Correo" name="correo">
            </div>
            <div class="form-group">
              <label for="inputName">Asunto:</label>
              <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Asunto" name="asunto" >
             </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Mensaje:</label>
              <textarea name="mensaje" class="form-control" id="inputMessage" placeholder="Mensaje"></textarea>
             </div>
            <button type="submit" class="btn btn-primary">Enviar Mensaje a Todos</button>
          </form>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous">
    </script>

        <template v-if="menu==4">
            <h1>Contenido del menú 4</h1>
        </template>

        <template v-if="menu==5">
            <h1>Contenido del menú 5</h1>
        </template>

        <template v-if="menu==6">
            <h1>Contenido del menú 6</h1>
        </template>

        <template v-if="menu==7">
            <h1>Contenido del menú 7</h1>
        </template>

        <template v-if="menu==8">
            <h1>Contenido del menú 8</h1>
        </template>

        <template v-if="menu==9">
            <h1>Contenido del menú 9</h1>
        </template>

        <template v-if="menu==10">
            <h1>Contenido del menú 10</h1>
        </template>

        <template v-if="menu==11">
            <h1>Contenido del menú 11</h1>
        </template>

        <template v-if="menu==12">
            <h1>Contenido del menú 12</h1>
        </template>

    @endsection