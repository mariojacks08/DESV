<html>
<head>
  <title>Resultados</title>
</head>
<body>
<h1>Resultados</h1>
<form action="EstudianteIndex.php" method=''>
<?php
    if(isset($_REQUEST['c11']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['c12']) or ($_REQUEST['c13']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }

    if(isset($_REQUEST['c21']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['c22']) or ($_REQUEST['c23']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }

    if(isset($_REQUEST['c31']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['c32']) or ($_REQUEST['c33']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }

    if(isset($_REQUEST['c41']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['c42']) or ($_REQUEST['c43']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }

    if(isset($_REQUEST['c51']))
    { ?>
            <h4>Respuesta correcta</h4><br> 
            
            <?php
            }
            
        elseif(($_REQUEST['c52']) or ($_REQUEST['c53']))
            {?>

            <h4>Respuesta incorrecta</h4><br>
            <?php
            }
?>
<button type="submit" name =''>Salir</button>
</body>
</html>