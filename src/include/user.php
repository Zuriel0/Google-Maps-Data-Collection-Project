<!--Este archivo permite comparar la informacion de incio de secion y obtener informacion del mismo -->

<?php
include_once 'db.php';

class User extends DB{
    private $user;
    private $ID;
    private $url;

    // verifica si el usuario y contraseña se encuentra dentro de la tabla de Users
    public function userExists($correo, $pass){
        $md5pass = $pass;
        $query = $this->connect()->prepare('SELECT * FROM user WHERE user = :users AND password = :pass');
        $query->execute(['users' => $correo, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($usuario){ // Gusardar los datos del usuario que inicio sesion
        $query = $this->connect()->prepare('SELECT * FROM user WHERE user = :user');
        $query->execute(['user' => $usuario]);
        
        foreach ($query as $currentUser) {
            $this->user = $currentUser['user'];
            $this->ID = $currentUser['id'];
            $this->url = $currentUser['url'];
        }
    }

    public function getUpdate(){ // Actulizamos los damos 
        $id= $this->ID;
        $sql = $this->connect()->prepare('SELECT * FROM user WHERE ID = :id');
        $sql->execute(['id' => $id]);

        foreach ($sql as $currentUser) {
            $this->user = $currentUser['user'];
            $this->url = $currentUser['Url'];
        }
    }

    public function getId(){ // Obtener Id usuario
        return $this->ID;
    }
    public function getUrl(){ // Obtener el url del usuario (La direccion de la imagen)
        return $this->url;
    }

    
}



?>