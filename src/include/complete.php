<?php
require_once('query.php');
$objConecion= new only_query();
if (isset($_POST)) {
  $id = $_POST['buttonCom'];
  $sql="UPDATE metaData SET complete = '1' WHERE metaData.id = $id ;" ;
    $objConecion->ejecSql($sql);
}
?>