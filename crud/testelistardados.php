<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once ('testeconexao.php');

    try {
        $sql = $conn->query('select * from produto');

        if($sql->rowcount() !=0)
        {
            foreach ($sql as $linha)
            {
                echo '<pre>';
                print_r($linha);
                echo '</pre>';
                echo "Nome: ".$linha[1]. "<br>";
                echo "Login: ".$linha['nome_produto']. "<br>";
                echo '<hr>';
            }
        }
        else
        {
            echo "Banco de dados Limpo!!!";
        }



        }catch (PDOException $ex) {
            echo $ex->getmessage();
        }





    ?>
</body>
</html>