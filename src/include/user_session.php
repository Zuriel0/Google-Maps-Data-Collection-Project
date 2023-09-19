<!-- Es el encargado de almacenar cierta informacion de incio de secion para su osterior uso -->

<?php
class UserSession{

    public function __construct(){
        session_start(); // Inicalizar secion:
    }

    public function setCurrentUser($user, $id, $url){
        $_SESSION['user'] = $user;
        $_SESSION['id'] = $id;
        $_SESSION['url'] = $url;
    }

    public function getCurrentUser(){ // Solicitamos la sesion 
        return $_SESSION['user'];
    }

    public function closeSession(){ // Destruimos la sesion 
        session_unset();
        session_destroy();
    }
}

?>