<?php
include_once('testeconexao.php');

$id_categoria = '';
$nome_categoria = '';
$desc_categoria = '';
$obs_categoria = '';
$status_categoria = '';

if ($_POST) {
    $id = $_POST['txtID'];

    $sql = $conn->query('select * from categoria where id_categoria =' . $id);
    if ($sql->rowcount() >= 1) {
        foreach ($sql as $row) {

            $id_categoria = $row[0];
            $nome_categoria = $row[1];
            $desc_categoria = $row[2];
            $obs_categoria = $row[3];
            $status_categoria = $row[4];








            /*
            echo "<p>ID: $row[0]</p>";
            echo "<p>Nome: $row[1]</p>";
            echo "Descrição: $row[2]</p>";
            echo "<p>Observação: $row[3]</p>";
            echo "<p>Status: $row[4]</p>";
            */
        }
    } else {
        echo '<p>Categoria Inexistente!</p>';
    }

}