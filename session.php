<?php
  session_start();
  $acesso = $_SESSION["acesso"];
  if (! $acesso){
   echo "<script> window.location.href ='index.php'; </script>";
   }
?>
