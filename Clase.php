<?php
require ('Conexion.php'); 
class user{
    private $user='';
    private $pass='';

    public function __construct($x,$y){
        $this->user = $x;
        $this->pass = $y;
}

    public function GetLogin(){

        $con = new Conexion();
        $usuarioLog = mysqli_query ($con->Conectar(), "SELECT * FROM usuarios WHERE username = '$this->user' AND password = '$this->pass'");
        $userExist = mysqli_num_rows($usuarioLog);
        $login = mysqli_fetch_object($usuarioLog);

        if($userExist <= 0){ 
            echo "Usuario no existe o hubo un error " ; 
           } 

        elseif($login->type == 'A'){
            header('Location: AdminIndex.php');
        }

        elseif($login->type == 'E'){
            header('Location: EstudianteIndex.php');
        }

        elseif($login->type == 'P'){
            header('Location: ProfesorIndex.php');
        }

        else{
            echo "Usuario incorrecto";
        }
    }
}
?>