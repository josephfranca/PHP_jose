<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabalhando com forms</h1><br>
    <form action= "" method = "post">
            <p>
                <h1>Nome</h1>
                <label for="txtNome">Informe seu nome</label>
                <input type="text" name="txtNome" id= "txtNome">
                <hr>
                <h1>Sobrenome</h1>
                <label for="txtSobrenome">Informe seu sobrenome</label>
                <input type="txtSobrenome" name= txtSobrenome id= "txtSobrenome">
             </p>
             <p>
                <button formaction = "pag2.php">OK</button>
             </p>
           
    </form>
    <hr>
    <?php
    if($_POST)
    {
        print_r($_POST);
        echo '<br>';
        echo $_POST['txtNome']." ".$_POST['txtSobrenome'];  

    }
    




    ?>

</body>
</html>