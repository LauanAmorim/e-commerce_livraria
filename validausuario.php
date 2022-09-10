<?php
  include 'conexao.php';
  
  $vEmail = $_POST['txtemail'];
  $vSenha = $_POST['txtsenha'];

  // echo $vEmail.'<br>';
  // echo $vSenha.'<br>';

  //consulta
  $consulta = $cn->query("select cd_usuario, nm_usuario, ds_email, ds_senha, ds_status from tbl_usuario where ds_email = '$vEmail' and ds_senha = '$vSenha' ");

  if($consulta->rowCount() == 1) {
    echo 'Usuário está cadastrado';
  }
  else if ($consulta->rowCount() <= 1) {
    echo 'Usuário não cadastrado';
  }
?>