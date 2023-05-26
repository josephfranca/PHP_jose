<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema mdi</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <?php include_once('_topo.php') ?>
        </div>
        <div class="row">
            <div class="col-sm-3" id="menu">
                <?php include_once('_menu.php') ?>
            </div>
            <div class="col-sm-9" id="conteudo">
                <?php
                if (isset($_GET['tela'])) {
                    if ($_GET['tela'] == 'usuario') {
                        include_once('tela_cadastro.php');
                    } elseif ($_GET['tela'] == 'categoria') {
                        include_once('tela_categoria.php');
                    } elseif ($_GET['tela'] == 'produto') {
                        include_once('tela_produto.php');
                    } elseif ($_GET['tela'] == 'historico') {
                        include_once('tela_historico.php');
                    } elseif ($_GET['tela'] == 'sair') {
                        include_once('_home.php');
                    } else {
                        include_once('_home.php');
                    }
                }
                ?>
            </div>
        </div>
        <div class="row">
            <?php include_once('_rodape.php') ?>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
</body>

</html>