<?php
  include 'conexao.php';
  
  session_start();

  $vEmail = $_POST['txtemail'];
  $vSenha = $_POST['txtsenha'];

  //consulta
  $consulta = $cn->query("select cd_usuario, nm_usuario, ds_email, ds_senha, ds_status from tbl_usuario where ds_email = '$vEmail' and ds_senha = '$vSenha' ");

  if($consulta->rowCount() == 1) {
    $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
    $_SESSION['ID'] = $exibeUsuario['cd_usuario'];
    header('location:index.php'); 
  }
  else if ($consulta->rowCount() <= 1) {
    header('location:erro.php');
  }
?>