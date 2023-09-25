<?php 
    session_destroy();
    $_SESSION['logado'] = false;
    $_SESSION['usuario'] = '';

    header("location:index.php");
    exit;
?>