<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
    <!-- Latest compiled and minified CSS -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!-- Jquery -->
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

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

  .container-fluid .row {
    justify-content: center ;
  }

  .container-fluid button {
    display: flex;
    flex-direction: column;
    margin: 0 auto;
    width: 100%;
    align-items: center;
  }
</style>

</head>
<body>
<?php
	
	include 'conexao.php';
	include 'components/navbar.html';
  include 'components/jumbotron.html';
?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				<form name="frmusuario" method="post" action="validausuario.php">
				<h2>Logon de Usuário</h2>
				
					<div class="form-group">
				
						<label for="txtemail">Email</label>
						<input name="txtemail" type="email" class="form-control" required id="email" autocomplete="off">
					</div>
				
				<div class="form-group">
				
						<label for="txtsenha">Senha</label>
						<input name="txtsenha" type="password" class="form-control" required id="senha" autocomplete="off">
				</div>
				
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-ok"> Entrar</span>
					
				</button>
				
				<button type="submit" class="btn btn-lg btn-link">
					
					Ainda não sou cadastrado
					
				</button>
        </form>
			</div>
		</div>
	</div>
	
	<?php include 'components/footer.html' ?>
</body>
</html>