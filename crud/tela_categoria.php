<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <?php include_once('pesquisar_categoria.php')?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                <h1>Gerenciamento de categorias</h1>
            </div>
            <form action="" method="post" class="form-control">
                <div class="row mt-3">
                    <div class="col-sm-3">
                        <input type="number" name="txtID" id="txtID" class="form-control" min="0"
                            placeholder="ID da categoria" value="<?= $id_categoria?>">
                    </div>
                    <div class="col-sm-9">
                        <button id="btnpesquisar" name="btnpesquisar" class="btn btn-primary"
                            formaction="tela_categoria.php">&#128269;</button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-9">
                        <input type="text" name="txtNome" id="txtNome" class="form-control"
                            placeholder="Nome da categoria" value = "<?=$nome_categoria?>">
                    </div>

                    <div class="col-sm-3">
                        <select name="txtStatus" class="form-control" id="txtStatus">
                            <option value="">--Selecione o Status--</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <textarea name="txtdesc" id="txtdesc" rows="3" class="form-control"
                            placeholder="Descrição"><?=$desc_categoria?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12">
                        <textarea name="txtObs" id="txtObs" rows="5" class="form-control"
                            placeholder="Observações"> <?=$obs_categoria?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 text-end">
                        <button id="btncadastrar" name="btncadastrar" class="btn btn-success"
                            formaction="cadastrar_categoria.php" value="cadastrar">Cadastrar</button>
                        <button id="btnalterar" name="btnalterar" class="btn btn-secondary"
                            formaction="alterar_categoria.php" value="alterar">Alterar</button>
                        <button id="btnlimpar" name="btnlimpar" class="btn btn-warning" formaction="tela_categoria.php"
                            value="limpar">Limpar</button>
                        <button id="btnexcluir" name="btnexcluir" class="btn btn-danger"
                            formaction="excluir_categoria.php" value="excluir">Excluir</button>
                        <button id="btnsair" name="btnsair" class="btn btn-dark" formaction="tela_categoria.php"
                            value="sair">Sair</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>