<?php
require_once "db.php";
$sql = "SELECT * FROM tbl_images ORDER BY image_order ASC";
$result = $conn->query($sql);
$conn->close();
?>
<!doctype html>
<html >
    <head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">



            
        <div class="sidenav">
         <div class="login-main-text">
            <h2>Sistema da Fila<br><img src="img/logo.jpg" width="10%" heidth="10%"> Fila</h2>
            <p>Controle da Fila .</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="post" action="valida_usuario.php">
                  <div class="form-group">
                     <label>Login</label>
                     <input type="text" name="login" class="form-control" placeholder="Login">
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" name="senha" class="form-control" placeholder="Senha">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
               </form>
            </div>
         </div>
      </div>
        </div>


      <div class="container">
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
							<td>Sistema de Fila</td>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = $conn->query("SELECT id, name, position FROM country ORDER BY position");
							while($data = $sql->fetch_array()) {
							    echo '
							        <tr data-index="'.$data['id'].'" data-position="'.$data['position'].'">
							            <td>'.$data['name'].'</td>
                                        <td>'.$data['position'].'</td>
							        </tr>
							    ';
                            }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script
            src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>

   
    </div>


    </body>
</html>

