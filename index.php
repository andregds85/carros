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


<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="vendor/jquery/jquery-ui/jquery-ui.css">
        <script src="vendor/jquery/jquery-ui/jquery-ui.js" type="text/javascript"></script>
        
        <link rel="stylesheet" type="text/css" href="style.css" >
       
        <title>Fila dos Carros </title>
        <script>
            $(document).ready(function () {
                var dropIndex;
                $("#image-list").sortable({
                    	update: function(event, ui) { 
                    		dropIndex = ui.item.index();
                    }
                });

                $('#submit').click(function (e) {
                    var imageIdsArray = [];
                    $('#image-list li').each(function (index) {
                        if(index <= dropIndex) {
                            var id = $(this).attr('id');
                            var split_id = id.split("_");
                            imageIdsArray.push(split_id[1]);
                        }
                    });

                    $.ajax({
                        url: 'reorderUpdate.php',
                        type: 'post',
                        data: {imageIds: imageIdsArray},
                        success: function (response) {
                           $("#txtresponse").css('display', 'inline-block'); 
                           $("#txtresponse").text(response);
                        }
                    });
                    e.preventDefault();
                });
            });

        </script>
    </head>
    <body>
    <div class="main">

        <div id="gallery">
        
        <div id="image-container">
        <h2>Fila dos Carros </h2>
        <div id="txtresponse" > </div>
            <ul id="image-list" >
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $imageId = $row['id'];
                        $imageName = $row['image_name'];
                        $imagePath = $row['image_path'];

                        echo '<li id="image_' . $imageId . '" >
                        <img src="' . $imagePath . '" alt="' . $imageName . '"></li>';
                    }
                }
                ?>
            </ul>

        </div>            
      
            
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
    </body>
</html>