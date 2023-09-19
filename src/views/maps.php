<?php
function sepWay ($arg, $seps){
  $sep = $seps;
  $cad = $arg;
  $Separador = explode($sep, $cad);
  return $Separador;
}

$url = 'https://maps.app.goo.gl/ni5jnKw4BvtEVC546';
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
?>

<code> <?php 
//echo htmlspecialchars($var[1]);
print_r($var);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo $var[10];
echo '<br>';
echo '<br>';
echo $var[9];
echo '<br>';
echo $url;
echo '<br>';
echo $addres;
echo '<br>';
echo $name;
?>  </code>