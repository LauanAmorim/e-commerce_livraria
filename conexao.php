<?php
  $servidor = 'localhost';
  $usuario = 'root';
  $senha = '12345678';
  $banco = 'dblivros';

  $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
  
?>