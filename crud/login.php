<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <title>Document</title>

    </head>
    <body>
        <?php
        $mensagem = '';
        if ($_POST) {
            include_once('testeconexao.php');
            $login = $_POST['txtlogin'];
            $senha = $_POST['txtsenha'];

            try {
                $sql = $conn->query('
                        select * from usuario
                        where 
                            usuario_usuario = "' . $login . '" and
                            senha_usuario = "' . $senha . '"
                    ');
                if ($sql->rowcount() == 1) {
                    session_start();

                    foreach ($sql as $row) {
                        $_SESSION['id_usuario'] = $row[0];
                        $_SESSION['nome_usuario'] = $row[1];
                        $_SESSION['usuario_usuario'] = $row[4];
                        $_SESSION['img_usuario'] = $row[6];

                        header('location:_sistema.php');
                    }
                } else {
                    $mensagem = 'Erro, usuário ou senha inválido';
                }
            } catch (PDOException $ex) {
                $ex->getMessage();
            }

        }
        ?>
        <form method="post" name="login" id="login">
            <section class="vh-100" style="background-color: #508bfc;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">

                                    <h3 class="mb-5">Sign in</h3>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="txtlogin" class="form-control form-control-lg" />
                                        <label class="form-label" for="txtlogin">Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="txtsenha" class="form-control form-control-lg" />
                                        <label class="form-label" for="txtsenha">Password</label>
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block" formaction="login.php">Login</button>
                                    <hr class="my-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </body>
</html>