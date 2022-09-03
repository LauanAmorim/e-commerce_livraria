<?php
  $servidor = 'localhost';
  $usuario = 'livro';
  $senha = '123456';
  $banco = 'dblivros';

  $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
  
?>