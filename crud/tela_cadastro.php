<?php include_once('pesquisar_usuario.php') ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-12">
            <h1>Gerenciamento de Usuário</h1>
        </div>
    </div>
    <form action="" method="post">
        <div class="row mt-3">
            <div class="col-sm-2">
                <input type="number" class="form-control" min="0" name="txtID" placeholder="ID do Usuário"
                    value="<?= $IDusuario ?>">
            </div>
            <div class="col-sm-2">
                <button class="btn btn-primary" formaction="_sistema.php?tela=usuario">&#128269;</button>
            </div>

            <div class="col-sm-2">
                <input type="text" class="form-control" name="txtnome" placeholder="Nome do Usuário"
                    value="<?= $nomeusuario ?>">
            </div>


            <div class="col-sm-2">
                <input type="date" class="form-control" name="txtNascimento" placeholder="Data de Nascimento do Usuário"
                    value="<?= substr($nascusuario, 0, 10) ?>">
            </div>


            <div class="col-sm-2">
                <input type="text" class="form-control" name="txtlogin" placeholder="login do Usuário"
                    value="<?= $loginusuario ?>">
            </div>

            <div class="col-sm-2">
                <input type="password" class="form-control" name="txtsenha" placeholder="senha do Usuário"
                    value="<?= $senhausuario ?>">
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-sm-8">
                <input type="file" class="form-control" name="txtImg" id="txtImg" placeholder="Imagem do Usuário"
                    value="<?= $imagemusuario ?>">
            </div>
            <div class="col-sm-4">
                <div>
                    <select name="txtStatus" id="txtStatus" class="form-control">
                        <option value="">--Selecione um Status</option>
                        <option value="Ativo" <?= ($statususuario == 'Ativo' ? 'selected' : "") ?>>Ativo</option>
                        <option value="Inativo" <?= ($statususuario == 'Inativo' ? 'selected' : "") ?>>Inativo</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12">
                <textarea name="txtOBS" id="txtOBS" rows="5" class="form-control"
                    placeholder="Observação do Usuário"><?= $obsusuario ?></textarea>
            </div>
        </div>
        <div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btocadastrar" id="btocadastrar" class="btn btn-success"
                        formaction="cadastrar_usuario.php">Cadastrar</button>
                    <button id="btnalterar" name="btnalterar" class="btn btn-secondary" formaction="alterar_usuario.php"
                        value="alterar">Alterar</button>
                    <a href="_sistema.php?tela=usuario" name="btolimpar" id="btolimpar"
                        class="btn btn-primary">Limpar</a>
                    <button name="btoexcluir" id="btoexcluir" class="btn btn-info"
                        formaction="excluir_usuario.php">Excluir</button>
                    <button name="btosair" id="btosair" class="btn btn-danger">Sair</button>
                </div>
            </div>
        </div>
    </form>
</div>