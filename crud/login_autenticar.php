<?php
$idusuariologin = '';
$nomeusuario = '';
$loginusuariologin = '';
$imgusuariologin = '';

session_start();

if ($_SESSION) {
    if (isset($_SESSION['id_usuario']) && isset($_SESSION['nome_usuario']) && isset($_SESSION['usuario_usuario']) && isset($_SESSION['img_usuario']))
     {
        $idusuariologin = $_SESSION['id_usuario'];
        $nomeusuario = $_SESSION['nome_usuario'];
        $loginusuariologin = $_SESSION['login_usuario'];
        $imgusuariologin = $_SESSION['img_usuario'];
    }
    else
    {
        header('location:login.php');
    }
}
else
{
    header('location:login.php');
}
?>