<?php
DEFINE("DB_HOST","52.184.158.178");
DEFINE("DB_USER","pbmc");
DEFINE("DB_PASS","y[TkQ1K4Lb7qr4h!");
DEFINE("DB","game");


class Conexion{

    function Conectar(){
        return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB);
    }

}