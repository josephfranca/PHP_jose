<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aula 01 de PHP</h1>
    <hr>
    <?php
    echo '<h2>Olá mundo! </h2>';
    echo '<hr>';

    $nome = 'josézinho'; // váriavel para nome
    
    echo "<h3> Seu nome é: $nome </h3>";
    echo '<h2> primeiros contatos com PHP, até agora ta tranquilo :) </h2>';
    echo '<h3> concatendo o que dizem: '.$nome.'</h3>';
    $x = 5;
    $y = 5;
    $z = 15.2;

    echo $x + $y + $z;
        //calculos mátematicos
        var_dump($nome);
        var_dump($x);
        var_dump($y);
        var_dump($z);
        //o var_dump serve para mostrar o tipo de váriavel que está em uso e as vezes a quantidade de caracteres

        echo '<br>';
        $nomes = ['josezinho','junior','julia'];

        var_dump($nomes);
        echo '<br>';
        echo $nomes [2];

    ?>

</body>
</html>