<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Cadastro - EasyShoes</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
	<h1 class="es">EasyShoes</h1>
	<div class="login">
	<h1>Cadastro: </h1>
    <form method="post">
	<input type="text" name="nome" placeholder="Nome" required="required" />
	<input type="number" name="cpf" placeholder="CPF" required="required" />
    	<input type="text" name="usuario" placeholder="Usuario" required="required" />
    	<input type="email" name="email" placeholder="Email" required="required" />
        <input type="password" name="senha" placeholder="Senha" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large"><a href="login.php">Cadastrar
		<i style="color:green; font-size: 2em" class="fa fa-check"></i></a>
	</button>
    </form>
</div>
  <script  src="js/index.js"></script>

</body>
</html>
