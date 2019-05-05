@section('correo')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel correo</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
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

  </body>
</html>
@endsection