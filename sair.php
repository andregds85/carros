<?php
	session_start();
    $_SESSION["acesso"]="SAIR";
    session_destroy();
    echo"<script> window.location.href ='index.php'; </script>";
    exit;
    
?>
