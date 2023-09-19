<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adventure N&Z</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/background.css">
  <link rel="stylesheet" href="../style/home.css">
  <link rel="stylesheet" href="../style/reviews.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body onload='ajax();'>
  
<?php
      require_once('../views/background.php');
?>



<?php 
require_once('header.php');

?>



<div class="container mx-auto bg-opacity-10">
  <div class="row text-center bg-opacity-10">
    <div class="col bg-opacity-10">
      <div class="card h-100 bg-opacity-10" style="background-color:rgb(255,255,255,0.50)">
        <div class="card-header bg-opacity-10">
          BITACORA
        </div>
        
        <div class="card-body bg-opacity-10">
          <div class="scrollable" style="height: 60vh; overflow: auto;">
            <div id="content">
              
            </div>

          </div>

            
                
        </div>
        <div class="card-footer text-muted bg-primary bg-opacity-10">
          <form action="" id="formulario">
            <input type="text" name="txt" autocomplete="off" id="msj">
            <button class="btn bg-gradient" id="btn-send-msj">Send</button>
          </form>
        </div>
      </div>
    </div>    
  </div>
      
</div>




<script src="../script/send.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>