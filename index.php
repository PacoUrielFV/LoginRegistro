<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: Contenido.php');
}else{
    header('Location: registrate.php');
}

?>