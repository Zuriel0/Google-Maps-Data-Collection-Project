<?php
function sepWay ($arg, $seps){
  $sep = $seps;
  $cad = $arg;
  $Separador = explode($sep, $cad);
  return $Separador;
}
require_once('query.php');
$objConecion= new only_query();
if (isset($_POST)) {
  $url = $_POST['txt'];
  if(file_get_contents($url)){
    $html = file_get_contents($url);
    $var = sepWay($html, '<body');
    $var = sepWay($var[0], '<meta content="summary"') ;
    $var = sepWay($var[0], '</title>' ); 
    $var = sepWay($var[1], '<meta content="');
    $url = sepWay($var[10], '" itemprop="image"');
    $url = $url[0];
    $addres = sepWay($var[9], '" property="og:title"');
    $addres = sepWay($addres[0],' · ');
    $name = $addres[0];
    $addres = $addres[1];
    $sql='INSERT INTO metaData (name, addres, url) VALUES ("'.$name.'","'.$addres.'","'.$url.'");';
    $objConecion->ejecSql($sql);
  }
}
?>