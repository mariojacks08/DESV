<?php
require ('Clase.php');

    $user =$_POST['user'];
    $pass =$_POST['pass'];
    $data = new user($user,$pass);
    $data->GetLogin();
?>