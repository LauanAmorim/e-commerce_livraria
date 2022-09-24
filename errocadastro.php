<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja - Logon de usuário</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->  
  <!-- Jquery -->
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <style>
 /* .navbar{padding: 10px;} */
 .jumbotron{padding: 60px; background: lightgray; margin-bottom: 10px;}
  .navbar-brand{font-weight: bolder; padding-top: 0px;}
	</style>
	
</head>

<body>
	
<?php
	
	include './conexao.php';	
	include './components/navbar.php';
	include './components/jumbotron.php';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Email já em uso na Loja!!!</h2>
				
				<a href="formusuario.php" class="btn btn-block btn-info" role="button">Tentar Novamente</a>
				
				<a href="esquecisenha.php" class="btn btn-block btn-primary" role="button">Esqueci a senha</a>
				
							
			</div>
		</div>
	</div>
	
	<?php include './components/footer.php' ?>
	
	
	
	
</body>
</html>