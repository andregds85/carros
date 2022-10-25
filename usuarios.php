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
              <a href="cadastra.php" class="waves-effect waves-light btn-large">Cadastra Usuario</a>

						</tr>
					</thead>
				
				</table>

        <?php
        include("conecta.php");

    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
 
    //seleciona todos os itens da tabela 
    $cmd = "select * from usuarios"; 
    $produtos = mysqli_query($con,$cmd); 

    //conta o total de itens 
    $total = mysqli_num_rows($produtos); 

    //seta a quantidade de itens por página, neste caso, 2 itens 
    $registros = 1000000; 

    //calcula o número de páginas arredondando o resultado para cima 
    $numPaginas = ceil($total/$registros); 

    //variavel para calcular o início da visualização com base na página atual 
    $inicio = ($registros*$pagina)-$registros; 
 
    //seleciona os itens por página 
    $cmd = "select * from usuarios limit $inicio,$registros"; 
    $produtos = mysqli_query($con,$cmd); 
    echo "<b>";
    echo "Total de Registros : ".$total = mysqli_num_rows($produtos); 
    echo "<br>";

    while ($produto = mysqli_fetch_array($produtos)) { 
       
        
      echo "<tbody>";
      echo"<tr>";
      echo "<th scope='row'>";
      $id=$produto['id'];
      echo $id;
      echo "</a>";     
      echo "</th>";  
      echo "<td>";
      echo $produto['nome']." - "; 
      echo"</td>";
      echo "<td>";
      echo $produto['sobrenome'];
      echo"</td>";
      echo "<td>";
      echo $produto['usuario'];
      echo"</td>";
      echo "<td>";    
      echo "<td>";
       
          
      echo "</tr>";        
      echo"</tbody>";  
  } 
   
      
  
     
     


     
?>     








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