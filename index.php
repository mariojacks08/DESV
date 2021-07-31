<!DOCTYPE hml>
<html lang="en"><head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="./IMG/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="./IMG/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
<link rel="mask-icon" type="" href="./IMG/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
<title>PBMC - LOGIN</title>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

<link rel="stylesheet" href="./CSS/Style.css">
</head>

<body translate="no">
  
  <div class="session">
    <div class="left">

    </div>
    <form action="Proceso.php" method="post" class="log-in" autocomplete="off"> 
      <h4><span> PBMC Game</span></h4>
      <p>Bienvenido! Ingresa en tu cuenta:</p>
      <div class="floating-label">
        <input placeholder="User" type="text" name="user" id="user" autocomplete="off">
        <label for="text">User:</label>
        <div class="icon">
<!--?xml version="1.0" encoding="UTF-8"?-->
<svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
<style type="text/css">
	.st0{fill:none;}
</style>
<g transform="translate(0 -952.36)">
	<path d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"></path>
</g>
<rect class="st0" width="100" height="100"></rect>
</svg>

        </div>
      </div>
      <div class="floating-label">
        <input placeholder="Password" type="password" name="pass" id="password" autocomplete="off">
        <label for="password">Password:</label>
        <div class="icon">
          
          <!--?xml version="1.0" encoding="UTF-8"?-->
          <svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
<style type="text/css">
	.st0{fill:none;}
	.st1{fill:#010101;}
</style>
		<rect class="st0" width="24" height="24"></rect>
		<path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z"></path>
		<path class="st1" d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z"></path>
		<path class="st1" d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z"></path>
</svg>
        </div>
        
      </div>
      <button type="submit" value="Iniciar sesión">Log in</button>
    </form>
  </div>
</body>
</html>