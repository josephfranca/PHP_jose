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
    <?include_once()?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Gerenciamento de Produtos</h1>
            </div>
            <form action="" method="post">
                <div class="row mt-3-">
                    <div class="col-sm-3">
                        <input type="number" name="txtID" id="txtID" class="form-control" min="0" placeholder="id">
                    </div>
                    <div class="col-sm-3">
                        <button id="btnpesquisar" name="btnpesquisar" class="btn btn-primary"
                            formaction="tela_produto.php">&#128269;</button>
                    </div>
                    <div class="col-sm-3">
                        <input type="number" name="txtidcategoria" id="txtidcategoria" class="form-control" min="0"
                            placeholder="ID da categoria">
                    </div>

                    <div class="col-sm-3">
                        <select name="txtnomecategoria" class="form-control" id="txtnomecategoria">
                            <option value="">--Selecione uma categoria</option>
                            <option value="...">...</option>
                        </select>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <input type="text" name="txtNome" id="txtNome" class="form-control" placeholder="Nome">
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <input type="number" name="txtqtde" class="form-control" placeholder="Quantidade">
                            </div>
                            <div class="col-sm-4">
                                <input type="number" name="txtvalor" id="txtvalor" class="form-control"
                                    placeholder="Valor">
                            </div>
                            <div class="col-sm-4">
                                <select name="txtstatus" class="form-control" id="txtstatus">
                                    <option value="">-- Selecione o Status</option>
                                    <option value="Ativo">Ativo</option>
                                    <option value="Inativo">Inativo</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <textarea name="txtObs" placeholder="Observações" class="form-control" rows="5"
                                    id="txtObs"></textarea>
                            </div>
                        </div>
                        <div class="row" mt-3>
                            <div class="col-sm-12 text-end">
                                <button id="btncadastrar" name="btncadastrar" class="btn btn-success"
                                    formaction="tela_produto.php" value="cadastrar">Cadastrar</button>
                                <button id="btnalterar" name="btnalterar" class="btn btn-secondary"
                                    formaction="tela_produto.php" value="alterar">Alterar</button>
                                <button id="btnlimpar" name="btnlimpar" class="btn btn-warning"
                                    formaction="tela_produto.php" value="limpar">Limpar</button>
                                <button id="btnexcluir" name="btnexcluir" class="btn btn-danger"
                                    formaction="tela_produto.php" value="excluir">Excluir</button>
                                <button id="btnsair" name="btnsair" class="btn btn-dark" formaction="tela_produto.php"
                                    value="sair">Sair</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>