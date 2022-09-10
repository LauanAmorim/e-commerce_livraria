<!DOCTYPE html>
<html lang="pt-br">
  <title>Livraria Online</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Jquery -->
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<style>
  /* .navbar{padding: 10px;} */
  .jumbotron{padding: 60px; background: lightgray; margin-bottom: 10px;}
  .navbar-brand{font-weight: bolder; padding-top: 0px;}
  .d-flex .btn{
    height: 35px;
    width: 150px;
    border-radius: 6px;
    margin: 7px;
    box-shadow: 2px 0px 12px rgba(0, 0, 0, 0.137);
    cursor: pointer;
    box-shadow: inset 0 0 0 0 #969696;
    transition: ease-out 420ms;
    padding: 0px;
  }

  .d-flex .btn:hover{
    box-shadow: inset 150px 0 0 0 #969696;
    color: white;
  }

  #prodPreco {
    color: green;
  }
</style>

<body>
  <?php
  include 'components/navbar.html';
  include 'components/jumbotron.html'; 
  include 'conexao.php';

  //consulta
  $consulta = $cn->query("select nm_livro, vl_preco, ds_capa, qt_estoque from vw_livro where sg_lancamento = 'S'");

  ?>  
  <div class="container-fluid">
    <div class="row">
      <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
      <div class="col-sm-3">
        <img src="imagens/<?php echo $exibe['ds_capa']; ?>.jpg" class="img-responsive" style = "width: 100%">
        <div><h5><?php echo mb_strimwidth($exibe['nm_livro'], 0, 30,'...'); ?></h5></div>
        <div id="prodPreco"><h5>R$ <?php echo number_format($exibe['vl_preco'], 2,',','.')?></h5></div>
        <div class="text-center">
          <?php if(($exibe['qt_estoque'] > 0)) { ?>
          <button class="btn btn-outline-primary" type="submit"">
            <span class="bi bi-info-circle"> Detalhes</span>
          </button>
          <button class="btn btn-outline-danger" type="submit"">
            <span class="bi bi-currency-dollar"> Comprar</span>
          </button>
          <?php } else { ?>
            <button class="btn btn-outline-primary" type="submit"">
              <span class="bi bi-info-circle"> Detalhes</span>
            </button>
            <button class="btn btn-outline-danger" type="submit"" disabled>
              <span class="bi bi-x-circle"> Indisponível</span>
            </button>
          <?php } ?>
        </div>


      </div>
      <?php } ?>
    </div>
  </div>


  <?php include 'components/footer.html' ?>
</body>

</html>
