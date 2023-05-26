<?php
include_once('testeconexao.php');
if ($_POST) {
    $id = $_POST['txtID'];

    try {
        $sql = $conn->query("
        select * from categoria where id_categoria = $id");
        if ($sql->rowcount()>=1)
        {
            foreach ($sql as $row)
            {
                $id= $row[0];
                $nome = $row[1];
                $desc = $row[2];
                $obs =  $row[3];
                $status =  $row[4];
            }
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }

    //verificacao
    if (! empty($_POST['txtNome'])) {
        $nome = $_POST['txtNome'];
    }
    if (! empty($_POST['txtdesc'])) {
        $desc = $_POST['txtdesc'];
    }
    if (! empty($_POST['txtObs'])) {
        $obs = $_POST['txtObs'];
    }
    if (! empty($_POST['txtStatus'])) {
        $status = $_POST['txtStatus'];
    }
   /* echo $nome;
    echo '<br>';
    echo $desc;
    echo '<br>';
    echo $obs;
    echo '<br>';
    echo $status;
    */

    try {
        $sql = $conn->prepare("
            update categoria set 
                nome_categoria=:nome_categoria,
                desc_categoria=:desc_categoria,
                obs_categoria=:obs_categoria,
                status_categoria=:status_categoria
            where id_categoria=:id_categoria
        ");
        $sql->execute(
            array(
                ':id_categoria' => $id,
                ':nome_categoria' => $nome,
                ':desc_categoria' => $desc,
                ':obs_categoria' => $obs,
                ':status_categoria' => $status
            )
        );
        if ($sql->rowCount() >= 1) {
            echo '<p> Os dados foram alterados com sucesso!</p>';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    } 

    


    
}
else{
    header('location:_sistema.php?tela=categoria.php');
}
?>
<hr>
<a href="_sistema.php?tela=categoria">Voltar</a>