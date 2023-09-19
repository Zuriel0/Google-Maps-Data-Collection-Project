<!-- Este arcchivo unicamente muestra la html de la pagina de incio el cual es mandado a llamar desde el archivo index -->
<!doctype html>
<html lang="es">
  <head>
    <title>Login For Our Adventure</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/background.css">
  </head>
  <body>
      <?php
      require_once('src/views/background.php');
      ?>
    <div class="container bg-opacity-10">
        <div class="row bg-opacity-10">
            <div class="col-md-4 bg-opacity-10">
            </div>    
            <div class="col-md-4 bg-opacity-10">
            <br/>
            <div class="card bg-opacity-10" style="background-color:rgb(255,255,255,0.50)">
              <div class="card-header bg-opacity-10">
                Iniciar Sesion
              </div>
              
              <div class="card-body bg-opacity-10">

                <form action="" method="post">
                <?php 
                  if(isset($errorLogin)){
                    echo "Correo y/o password incorrecto"."<br/>";
                  }
              ?>
                  Correo: <input class="form-control" type="text" name="Mail" >
                  <br/>
                  Contraseña: <input class="form-control" type="password" name="password" >
                  <br/>
                  <button class="btn btn-success" type="submit">Iniciar sesion </button>
                </form>          
              </div>
              <div class="card-footer text-muted bg-primary bg-opacity-10">
                
              </div>
            </div>
              
            </div>    
            <div class="col-md-4">
                
            </div>    
        </div>
      
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>