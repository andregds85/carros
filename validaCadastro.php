<?php  include ("session.php"); 

 $nome=$_POST["nome"];

    if($nome==""){
        ?>
<script>
alert("Favor preencher o nome");
</script>
        <?php
      echo "<script> window.location.href = 'main.php' </script>";
      exit;
    }


 $sobrenome=$_POST["sobrenome"];
 $usuario=$_POST["email"];
 $senha=$_POST["senha"];
 $gravaSenha=md5($senha);   
      
    
include("conecta.php");   
        
$dados=("insert into usuarios(nome, sobrenome,usuario, senha) values ('$nome','$sobrenome','$usuario','$gravaSenha')");

// executa a consulta
$resDados = mysqli_query($con, $dados);
 
    if($resDados){
              
      ?>

<script>
alert("Cadastro efetuado com sucesso");
</script>


    <?php 
        echo "<script> window.location.href = 'main.php' </script>";




              
    }      
      

    ?>  
      

            

