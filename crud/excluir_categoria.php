<?php
include_once('testeconexao.php');

if ($_POST) {

    $id = $_POST['txtID'];
    try {
        $sql = $conn->prepare("
        delete from categoria where id_categoria=:id_categoria");

        $sql->execute(
            array(
                ':id_categoria' => $id
            )
        );
        if ($sql->rowcount() >= 1) {
            echo '<p>Dados Excluidos com sucesso! (Espero que seja o que você queria fazer..)';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
} else {
    header('location:tela_categoria.php');
}
?>
<hr>
<a href="tela_categoria.php">Voltar</a>