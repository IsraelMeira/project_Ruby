<?php
  session_start();
  $Usernamet = $_POST['Username'];
  $Passwordt = $_POST['Password'];
  echo $Usernamet.' - '.$Passwordt;
  include_once("conexao.php");
  $result = mysql_query("SELECT * FROM username WHERE usuario='Usernamet' AND senha'Passwordt' LIMIT 1");
  $resultado = mysql_fetch_assoc($result);
  $resultado['nome'];
  if(empty($resultado)){
  	$_session['loginErro'] ="Ususario ou senha inválida";
  	  }
  	  header("location: sistema.php");
?>