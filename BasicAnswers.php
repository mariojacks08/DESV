<html>
<head>
  <title>Resultados</title>
</head>
<body>
<h1>Resultados</h1>
<form action="./game/UnoVsAll/Dificultad.php" method=''>
<?php
    if(isset($_REQUEST['12']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['11']) or ($_REQUEST['13']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }

    if(isset($_REQUEST['21']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['22']) or ($_REQUEST['23']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }

    if(isset($_REQUEST['32']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['31']) or ($_REQUEST['33']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }

    if(isset($_REQUEST['41']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['42']) or ($_REQUEST['43']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }

    if(isset($_REQUEST['51']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['52']) or ($_REQUEST['53']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }
?>
<button type="submit" name =''>Salir</button>
</body>
</html>