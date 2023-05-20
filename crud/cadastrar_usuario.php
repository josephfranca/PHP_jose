<?php
include_once('testeconexao.php');

if($_POST)
{
    $nome = $_POST['txtnome'];
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];
    $nasc = $_POST['txtNascimento'];
    $img = '';
    $status = $_POST['txtStatus'];
    $obs = $_POST['txtOBS'];

    try {
        
        $sql = $conn->prepare("
            insert into usuario
            (
                nome_usuario,
                nascimento_usuario,
                usuario_usuario,
                senha_usuario,
                img_usuario,
                obs_usuario,
                status_usuario
            )
            values
            (
                :nome_usuario,
                :nascimento_usuario,
                :usuario_usuario,
                :senha_usuario,
                :img_usuario,
                :obs_usuario,
                :status_usuario
            )
        ");

        $sql->execute(array(
            ':nome_usuario'=>$nome,
            ':nascimento_usuario'=>$nasc,
            ':usuario_usuario'=>$login,
            ':senha_usuario'=>$senha,
            ':img_usuario'=>$img,
            ':obs_usuario'=>$obs,
            ':status_usuario'=>$status
        ));

        if($sql->rowCount()>=1)
        {
            echo '<p>Dados Cadastrados com sucesso</p>';
            echo '<p>ID Gerado: '.$conn->lastInsertId().'</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:tela_cadastro.php');
}
?>

<hr>
<a href="tela_cadastro.php">Voltar</a>