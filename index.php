<!DOCTYPE html>
<html lang="pt-br">

<head>

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
  .navbar{padding: 20px;}
  .jumbotron{padding: 60px; background: lightgray; margin-bottom: 10px;}
  .navbar-brand{font-weight: bolder;}
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
</style>

<body>
  <?php include 'components/navbar.html' ?>
  <?php include 'components/jumbotron.html' ?>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <img src="https://placehold.co/450x320" class="img-responsive" style = "width: 100%">
        <div><h3>Nome do Produto</h3></div>
        <div><h4>R$500,00</h4></div>
      </div>
      
      <div class="col-sm-3">
        <img src="https://placehold.co/450x320" class="img-responsive" style = "width: 100%">
        <div><h3>Nome do Produto</h3></div>
        <div><h4>R$500,00</h4></div>
      </div>
      
      <div class="col-sm-3">
        <img src="https://placehold.co/450x320" class="img-responsive" style = "width: 100%">
        <div><h3>Nome do Produto</h3></div>
        <div><h4>R$500,00</h4></div>
      </div>
      
      <div class="col-sm-3">
        <img src="https://placehold.co/450x320" class="img-responsive" style = "width: 100%">
        <div><h3>Nome do Produto</h3></div>
        <div><h4>R$500,00</h4></div>
      </div>
    </div>
  </div>


  <?php include 'components/footer.html' ?>
</body>

</html>