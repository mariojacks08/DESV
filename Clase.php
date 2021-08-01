<?php
require ('Conexion/conn.php'); 
require ('Conexion/tockenGenerator.php');
class user{
    private $user='';
    private $pass='';
    private $tocken='';
    
    public function __construct($x,$y){
        $this->user = $x;
        $this->pass = $y;
    }
    public function GetLogin(){
        $conn = new Querrys();
        $tocken = new TockenGenerator();
        $pageLoad = "#";
        switch($conn->getUserType($this->user,$this->pass)){
            case 'A':
                $pageLoad = "cPanel/admin/Index.php";
                break;
            case "E":
                $pageLoad = "game/Index.php";
                break;
            case "P":
                $pageLoad = "cPanel/profesor/Index.php";
                break;
            default:
                $pageLoad = "Index.php";
                echo "Usuario incorrecto";
            break;
        }
        if($pageLoad != "Index.php"){
            $this->tocken = $tocken->getToken();
            $conn->saveSession($this->user,$this->tocken);
            setcookie('tocken', $this->tocken, time() + (86400 * 30), "/");
        }
        header("Location: ".$pageLoad);
    }
}
?>