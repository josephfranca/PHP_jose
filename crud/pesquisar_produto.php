<?php 
include_once('testeconexao.php');

if($_POST)
{
    $id = $sql['txtID'];

    $sql = $conn->query('select * from produto where id_produto=' .$id);

    if($sql->rowCount()>=1){
        foreach($sql as $row);
            $id_produto = $row[0];
            $id_categoria_produto = $row [1];
            $nome_produto  = $row [2];
            $qtde_produto  = $row [3];
            
            
    }

}
?>