<!-- Este archivo es el primero que scon que se interactua, de aqui se manda a llamr el formulario de login.php como tambien funciones de accer como User.php y  User_session.php para corroborar y almacenar datos de posibles usuarios-->

<?php
    require ("src/include/query.php");
    include_once ("src/include/user.php");
    include_once ("src/include/user_session.php");
    
    
    $userSession = new UserSession();
    $user = new User();
    

    if(isset($_SESSION['user'])){
        //echo "hay sesion";
        $user->setUser($userSession->getCurrentUser());
        header ('location: src/views/home.php');

    
    }else if(isset($_POST['Mail']) && isset($_POST['password'])){
        //echo "Validacion loggin";
        $userForm = $_POST['Mail'];
        $passForm = $_POST['password'];
    
        $user = new User();
        if($user->userExists($userForm, $passForm)){
            
            $user->setUser($userForm);
            //echo "Existe el usuario!!";
            $id=$user->getId();
            $url = $user->getUrl();
            $userSession->setCurrentUser($userForm,$id,$url);
            
            header ('location: src/views/home.php');
           
        }else{
            //echo "No existe el usuario";
            $errorLogin = "Nombre de usuario y/o password incorrecto";
            include_once 'src/views/login.php';
        } 
    }else{
        //echo "login";
        include_once 'src/views/login.php';
    }  
    
?>



