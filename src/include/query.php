<!--Este es una extencion de DB la cual se encarga de realizar las consultas y ejecuciones de condigo sql -->

<?php
include_once 'db.php';

class only_query extends DB{


//Ejecuta sql para la escritura en db
public function ejecSql($sql){
    $query=$this->connect()->exec($sql);
    //return $query->lastInsertId();
}
//Consulta de db
public function searchSql($sql){

    $sent=$this->connect()->prepare($sql);    // Preparmos el comando en la db.
    $sent->execute(); //Ejecutamos comandos
    $resultado=$sent->fetchAll();  //Buscamos y guardamos los resultados obtenidos. 
    foreach($resultado as $Var );
    return $Var;
}
public function searchSql_Assoc($sql){

    $sent=$this->connect()->prepare($sql);    // Preparmos el comando en la db.
    $sent->execute(); //Ejecutamos comandos
    $resultado=$sent->fetchAll(PDO::FETCH_ASSOC);  //Buscamos y guardamos los resultados obtenidos de forma asociativa. 
    //foreach($resultado as $Var );
    return $resultado;
}
public function executeSql($sql){
    $sent=$this->connect()->prepare($sql);    // Preparmos el comando en la db.
    $sent->execute(); //Ejecutamos comandos
    return $sent;
}
}
//echo "Esto es una prueba";

