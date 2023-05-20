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
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Gerenciamento de Histórico</h1>
            </div>
            <form action="" method="post" class="form-control">
                <div class="row mt-3">
                    <div class="col-sm-3">
                        <input type="number" name="txtID" id="txtID" class="form-control" min="0" placeholder="id">
                    </div>
                    <div class="col-sm-9">
                        <button id="btnpesquisar" name="btnpesquisar" class="btn btn-primary"
                            formaction="tela_historico.php">&#128269;</button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-3">
                        <input type="number" name="txtidusuario" id="txtidusuario" class="form-control" min="0"
                            placeholder="ID do Usuário">
                    </div>
                    <div class="col-sm-3">
                        <select name="txtnomeusuario" class="form-control" id="txtnomeusuario">
                            <option value="">-- Selecione um Usuário</option>
                            <option value="...">...</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <input type="date" name="txtcadastro" class="form-control" id="txtcadastro">
                    </div>
                    <div class="col-sm-6">
                        <select name="txttipo" class="form-control" id="txttipo">
                            <option value="">--Selecione um tipo --</option>
                            <option value="..."></option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-4">
                        <input type="number" name="txtqtde" id="txtqtde" class="form-control" min="0"
                            placeholder="Quantidade">
                    </div>
                    <div class="col-sm-4">
                        <input type="number" name="txtvalor" id="txtvalor" class="form-control" min="0"
                            placeholder="Valor">
                    </div>
                </div>
                <div class="col-sm-4">
                    <select name="txtstatus" class="form-control" id="txtstatus">
                        <option value="">-- selecione o Status--</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <textarea name="txtObs" placeholder="Observação" class="form-control" rows="5"
                            id="txtObs"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 text-end">
                        <button id="btncadastrar" name="btncadastrar" class="btn btn-success"
                            formaction="tela_historico.php" value="cadastrar">Cadastrar</button>
                        <button id="btnalterar" name="btnalterar" class="btn btn-secondary"
                            formaction="tela_historico.php" value="alterar">Alterar</button>
                        <button id="btnlimpar" name="btnlimpar" class="warning" formaction="tela_historico.php"
                            value="limpar">limpar</button>
                        <button id="btnlimpar" name="btnexcluir" class="btn btn-warning" formaction="tela_historico.php"
                            value="excluir">Excluir</button>
                        <button id="btnsair" name="btnsair" class="btn btn-dark" formaction="tela_historico.php"
                            value="sair">Sair</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>