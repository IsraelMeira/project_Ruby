<?php
  session_start();
 	$conectar = mysql_connect("localhost","root","") or die ("Erro na conexão");
 	$mysql_select_db("tcc");
?>