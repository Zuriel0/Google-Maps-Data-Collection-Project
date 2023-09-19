<?php
require_once('../include/query.php');
$objConecion= new only_query();
$sql = 'SELECT * FROM metaData ;';
$querys = $objConecion->searchSql_Assoc($sql);
foreach ($querys as $query){?>

 <div class="container">
  <div class="row <?php echo  $estate = $query['complete']=='1'? 'overlay': '' ?>">
    <div class="col-4">
      <img src="<?php echo $query['url']; ?>" alt="<?php echo $query['name']; ?>" width='100px' class="<?php echo  $estate = $query['complete']=='1'? 'imgGray': '' ?>">
    </div>
    <div class="col-6" style="text-align: justify;">
      <p class="text-content">
        Nombre: <?php echo $query['name']; ?>
        <br>
        Dirección: <?php echo $query['addres']; ?>
        <br>
        Rate: 
      </p>
    </div>
    <div class="col-2" id="div_<?php echo $query['id'];?>" style="white-space: pre-line;">
      <a type="button" id="complete_<?php echo $query['id'];?>" name="buttonCom" onclick="buttonComplete(<?php echo $query['id']; ?>);">
      <?php echo  $estate = $query['complete']=='1'? '': '<i class="bi bi-check-circle"></i>' ?> 
      </a>
    </div>
    <!-- <div class="<?php echo  $estate = $query['complete']=='1'? 'overlay': '' ?>"></div> -->
  </div>
 </div>
<hr>
 <?php } ?>