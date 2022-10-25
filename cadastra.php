<?php
    include("session.php");
?>
  <!DOCTYPE html>
  <html>
    <head>
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
</head>

<nav class="navbar navbar-expand-xl navbar-dark bg-dark box-shadow fixed-top">
    <div class="nav-wrapper">
      <ul class="left hide-on-med-and-down">
        <li><a href="main.php">Inicio</a></li>
        <li><a href="usuarios.php">Usuarios</a></li>
        <li><a href="sair.php">Sair</a></li>
      </ul>
    </div>
  </nav>
     


<?php
	$conn = new mysqli("localhost", "root", "", "ordem");

    if (isset($_POST['update'])) {
        foreach($_POST['positions'] as $position) {
           $index = $position[0];
           $newPosition = $position[1];

           $conn->query("UPDATE country SET position = '$newPosition' WHERE id='$index'");
        }

        exit('success');
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Fila </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-4 col-md-offset-4">
				<table class="table table-stripped table-hover table-bordered">
					<thead>
						<tr>
							<td>Usuarios do Sistema </td>
						</tr>
					</thead>
				
				</table>

<div class="container">

        <div class="row">
    <form class="col s12" method="post" action="validaCadastro.php">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nome" name="nome" id="first_name" type="text" class="validate">
          <label for="first_name">Nome</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Sobrenome" name="sobrenome" id="first_name" type="text" class="validate">
          <label for="first_name">sobrenome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="senha" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
  
      <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
        <i class="material-icons right">Usuario</i>
      </button>



    </form>
  </div>

  </div>






			</div>
		</div>
	</div>
  <body>

</body>
<footer class="page-footer bg-dark box-shadow">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Controle da Fila</h5>
                <p class="grey-text text-lighten-4">Organizando a Fila .</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <ul>
                  <li><a class="grey-text text-lighten-3" href="main.php">Inicio</a></li>
                  <li><a class="grey-text text-lighten-3" href="usuarios.php">usuarios</a></li>
                  <li><a class="grey-text text-lighten-3" href="sair.php">Sair</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2022 Taxi aeroporto
            </div>
          </div>
        </footer>

</html>