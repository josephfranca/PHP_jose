<?php
include_once('testeconexao.php');

if ($_POST) {
    $nome = $_POST['txtnome'];
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];
    $nasc = $_POST['txtNascimento'];
    $img = '';
    $status = $_POST['txtStatus'];
    $obs = $_POST['txtOBS'];
    $id = $_POST['txtID'];

    try {
        $sql = $conn->prepare("
            update usuario set
                nome_usuario=:nome_usuario,
                nascimento_usuario=:nascimento_usuario,
                usuario_usuario=:usuario_usuario,
                senha_usuario=:senha_usuario,
                img_usuario=:img_usuario,
                obs_usuario=:obs_usuario,
                status_usuario=:status_usuario
            where id_usuario=:id_usuario
        ");
        $sql->execute(
            array(
                ':id_usuario' => $id,
                ':nome_usuario' => $nome,
                ':nascimento_usuario' => $nasc,
                ':usuario_usuario' => $login,
                ':senha_usuario' => $senha,
                ':img_usuario' => $img,
                ':obs_usuario' => $obs,
                ':status_usuario' => $status
            )
        );
        if ($sql->rowCount() >= 1) {
            echo '<p> Os dados foram alterados com sucesso!</p>';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    } 
}
    else
    {
        header('location:_sistema.php?tela=usuario');
    }
?>    

<hr>
<a href="_sistema.php?tela=usuario">Voltar</a>



