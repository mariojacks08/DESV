<?php
DEFINE("DB_HOST","52.184.158.178");
DEFINE("DB_USER","pbmc");
DEFINE("DB_PASS","y[TkQ1K4Lb7qr4h!");
DEFINE("DB","game");

class Querrys{
    private function conectar(){
        return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB);
    }
    private function select($table,$condition){
        $conn = $this->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM ". $table ." WHERE ". $condition;
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            mysqli_close($conn);
            return $result;
        }
        else{
            mysqli_close($conn);
            return "untype";
        }
    }
    public function getUserType($user,$pass){
        $result = $this->select("usuarios","username = '$user' AND password = '$pass'");
        if($result != 'untype'){
            $data = mysqli_fetch_object($result);
            return $data->type;
        }
        else{
            return "untype";
        }
    }
    public function getUserTypeByToken($tocken){
        $result = $this->select("session s, usuarios u","u.username = s.user AND s.tocken = '$tocken'");
        if($result != "untype"){
            $data = mysqli_fetch_object($result);
            mysqli_close($conn);
            return $data->type;
        }
        else{
            return 'untype';
        }
    }
    private function saveDataInTable($tabla,$values){
        $conn = $this->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO " . $tabla . "VALUES(".$values.")";
        $result=  $conn->query($sql);
        $conn->close();
        return $result;
    }
    public function saveSession($user, $tocken){
        return $this->saveDataInTable("session","'$tocken','$user'");
    }
}
?>