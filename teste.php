<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
    include 'conexao.php';

    //Consulta/coleta a view "vw_livro"
    $consulta = $cn->query('select * from vw_livro');

    //Exibe os dados da view "vw_livro"
    while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
      echo $exibe['nm_livro']."<br>".$exibe['vl_preco']."<br>".$exibe['ds_categoria']."<hr>";
    }

    
  ?>
</body>
</html>