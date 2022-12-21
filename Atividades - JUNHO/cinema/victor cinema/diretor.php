<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diretor</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<style type="text/css">

		#tudo{		
			position: absolute;
			width: 600px;
			height: 600px;
			top: 50px;
			left: 50px;
			margin-left:530px;
			margin-top:50px;
			}

		body{
		background-image: url(imagematividade/fundo.png); 
		background-repeat: no-repeat; 
		background-size: 1950px 970px;
		}
		
	</style>

</head>
<body>

	<div id="tudo">
		<nav class="navbar navbar-expand-lg	w-100">

		<div class="container-fluid">

			<a class="navbar-brand" href="#">Descobrir : </a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav me-auto mb-2 mb-lg-0">

				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="index.html">Home</a>
				</li>

				<li class="nav-item">
				<a class="nav-link" href="diretor.php">Diretor</a>
				</li>

				<li class="nav-item">
				<a class="nav-link" href="ator.php">Ator</a>
				</li>

				<li class="nav-item">
				<a class="nav-link" href="genero.php">Gênero</a>
				</li>

				<li class="nav-item">
				<a class="nav-link" href="filme.php">Filme</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="cadastrarAtorFilme.php">Ator Filme</a>
				</li>

				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Consultar
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="consDiretor.php">Diretor</a></li>
					<li><a class="dropdown-item" href="consAtor.php">Ator</a></li>
					<li><a class="dropdown-item" href="consGenero.php">Gênero</a></li>
					<li><a class="dropdown-item" href="consFilme.php">Filme</a></li>
					<li><a class="dropdown-item" href="ConsultaElenco.php">Elenco</a></li>
				</ul>
				</li>

				</ul>

				<form class="d-flex" role="search">

				<input class="" type="search" placeholder="Search" aria-label="Search">

				<button class="btn btn-outline-success" type="submit">Search</button>

			</form>
			</div>
		</div>
		</nav>

		<form action="cadastraDiretor.php" method="post">
			Nome do Diretor:<br>
			<input type="text" name="txtNome"><br>
			<br>
			<input type="submit" name="btnCad" value="Cadastrar">
		</form>
		<br>
	</div>
</body>
</html>