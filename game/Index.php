<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Menu.css">
    <link rel="stylesheet" href="../CSS/General.css">
    <title>PBMC-G</title>
    <script type="text/javascript">

window.onload = function() {
  document.getElementById('ranking').addEventListener('click', function (e) {
    document.getElementById('frame').src = "../index.php";
    document.title = "PBMC - Seleccion de nivel"
  });
  document.getElementById('game').addEventListener('click', function (e) {
    document.getElementById('frame').src = "../JugarNiveles.php";
    document.title = "PBMC - Seleccion de nivel"
  });
  document.getElementById('help').addEventListener('click', function (e) {
    //document.getElementById('frame').src = "#";
    document.title = "PBMC - Ayuda"
  });
  document.getElementById('logoff').addEventListener('click', function (e) {
    document.title = "Saliendo"
  });
  

};
</script>
</head>
<body>
<header>
  <img src="../IMG/logo.gif" alt="logo juego" id="logojuego">
<nav class='container'>
  <div class='wrap'>
    <input type='checkbox' id='checking' style='display:none;'/>
    <img class='blob' id="ranking" src="../IMG/ranking.svg" alt="ranking" height="50rem" width="50rem">
    <img class='blob' id="game" src="../IMG/controller.svg" alt="controll de juego" height="50rem" width="50rem"/>
    <img class='blob' id="help" src="../IMG/help.svg" alt="ayuda" height="50rem" width="50rem">
    <img class='blob' id="logoff" src="../IMG/exit-door.svg" alt="log off" height="50rem" width="50rem">
    <label class='blob' for='checking' > <span class='bar'></span> <span class='bar'></span> <span class='bar'></span> </label>
  </div>
</nav>
<svg>
    <defs>
      <filter id="filt">
        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="filt" />
        <feBlend in2="filt" in="SourceGraphic" result="mix" />
      </filter>
    </defs>
</svg>
</header>
<iframe allowtransparency=true frameborder=0 sandbox="allow-same-origin allow-forms allow-scripts" scrolling=auto id="frame" src="../JugarNiveles.php" style="width:100%;height:100%"></iframe>
</body>
</html>