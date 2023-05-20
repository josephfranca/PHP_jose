<?php
include_once('testeconexao.php');

if($_POST)
{
    $id = $_POST['txtID'];

    try {
        $sql = $conn->prepare("
        delete from usuario where id_usuario=:id_usuario");

        $sql->execute(array(
            ':id_usuario'=>$id
        ));
        if($sql->rowCount()>=1)
        {
            echo'<p>Dados Excluidos com sucesso!</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('location:tela_cadastro.php');
}
?>
<hr>
<a href="tela_cadastro.php">Voltar</a>