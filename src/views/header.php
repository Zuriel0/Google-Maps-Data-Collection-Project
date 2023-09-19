<?php 
require_once('../include/user_session.php');
$userSession = new UserSession();



if(isset($_SESSION['user'])){
  //echo "hay sesion";
}else { 
  //echo "no hay sesion";
  header("location:./../../index.php"); 
}
require ("./../include/query.php");
?>




