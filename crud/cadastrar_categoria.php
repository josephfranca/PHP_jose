<?php
include_once('testeconexao.php');

if ($_POST) {
    if (
        empty($_POST['txtNome']) ||
        empty($_POST['txtStatus']) ||
        empty($_POST['txtdesc'])
    ) {
        echo '<p>Erro! preencha todos os campos para cadastrar a categoria</p>';
    } else {
        $nome = $_POST['txtNome'];
        $desc = $_POST['txtdesc'];
        $status = $_POST['txtStatus'];
        $obs = $_POST['txtObs'];
    }
    try {
        $sql = $conn->prepare("
        insert into categoria(
            nome_categoria,
            desc_categoria,
            obs_categoria,
            status_categoria
        )
        values(
            :nome_categoria,
            :desc_categoria,
            :obs_categoria,
            :status_categoria           
        )
        ");
        $sql->execute(
            array(
                ':nome_categoria' => $nome,
                ':desc_categoria' => $desc,
                ':obs_categoria' => $obs,
                'status_categoria' => $status
            )
        );
        if ($sql->rowcount() >= 1) {
            echo '<p>Os dados foram cadastrados com Sucesso!!</p>';
            echo '<p>ID Gerado: ' . $conn->lastinsertid() . ' </p>';
        } else {
            echo '<p>Algo deu errado no cadastro!</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }

} else {
    header('location:_sistema.php?tela=categoria');
}
?>
<hr>
<a href="_sistema.php?tela=categoria">Voltar</a>