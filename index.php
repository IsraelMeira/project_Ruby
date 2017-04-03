<?php
  session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Ruby</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css"> 
  </head>

  <body >

<div class="pen-title">
 <img src="css/1.png"/> <h1>Bem-Vindo ao Ruby</h1><span>Faça seu login ou cadastre-se</span>
</div>
<video autoplay loop poster="polina.jpg" class="bg_video">
			<source src="3.webm" type="video/webm">
			<source src="videos/bg.mp4" type="video/mp4">
</video>	
 <div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form  method="POST" action="index.html" >
       <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Enter</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div>

<!-- CodePen--><a id="codepen" title="Follow me!"><i class="fa fa-codepen"></i></a>
    <script src="js/code.js"></script>

        <script src="js/index.js"></script>

    
    
  </body>
</html>
