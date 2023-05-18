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
        <div class= "col-sm-12">
            <h1>Gerenciamento de Usuário</h1>
        </div>
    </div>
    <form action="" method= "post">
        <div class="row-mt-3">
            <div class="col-sm-4">
                <input type="number" class="form-control" min = "0" name= "txtID"
                placeholder = "ID do Usuário">
            </div>
            <div class="col-sm-4">
                <button class="btn btn-primary">&#128269;</button>
            </div>
            <div class="col-sm-4">
                <input type="date" class="form-control" name="txtNascimento"
                placeholder= "Data de Nascimento do Usuário">
             
            </div> 
      </div>   
        <!----------------------------------------------->
        <div class="row">
            <div class="col-sm-8">
                <input type="file" class="form-control" name= "txtImg" id="txtImg"
                placeholder = "Imagem do Usuário">
            </div>
            <div>
                <div class="col-sm-4">
                    <div>
                        <select name="txtStatus" id="txtStatus" class = "form-control">
                            <option value="">--Selecione um Status</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>
                </div>
                    <div class ="row mt-3">
                        <div class="col-sm-12">
                            <textarea name="txtOBS" id="txtOBS"  rows="5" class= "form-control" placeholder = "Observação do Usuário"></textarea>
                        </div>
                    </div>
            </div>
                
              

        </div>






    </form>
        <div>
            <div class="row mt -3">
                <div class = "col-sm-12 text-end">
                <button name = "btocadastrar" id= "btocadastrar" class = "btn btn-success">Cadastrar</button>
                <button name = "btolimpar" id= "btolimpar" class = "btn btn-primary">Limpar</button>
                    <button name = "btoalterar" id= "btoalterar" class = "btn btn-warning">Alterar</button>
                    <button name = "btoexcluir" id= "btoexcluir" class = "btn btn-info">Excluir</button>
                    <button name = "btosair" id= "btosair" class = "btn btn-danger">Sair</button>
                </div>
            </div>
        </div>







 </div>

</body>
</html>