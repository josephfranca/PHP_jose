<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.js">
</head>
<body>
   <div class="container">
        <div class = "row">
            <div class = "col-sm-12">
                <h1>Calculadora simples</h1>
            </div>
            <form action="" method= "post" class = "form-control">
            <div class= "row">
                <div class= "col-sm-3">
                    <input type="number" name="txtn1" placeholder = "Informe o primeiro valor!" class = "form-control" id= "txtn1" required>
                   </div>    
                    <div class = "col-sm-3">
                        <input type="number" name= "txtn2" placeholder = "Informe o segundo valor!"  class = "form-control" id= "txtn2" required>
                    </div>
                    <div class = "col-sm-6">
                        <button id= "btomais" name= "bto" formaction="aula02.php" value ="mais">+</button>
                             <!------------------------------------------>
                        <button id= "btomenos" name= "bto" formaction="aula02.php" value ="menos">-</button>
                        <!-------------------------------------------->
                        <button id= "btomult" name= "bto" formaction="aula02.php" value ="vezes">x</button>
                        <!-------------------------------------------->
                        <button id= "btodivisao" name= "bto" formaction="aula02.php" value ="dividir">/</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        if($_POST)
                        {
                            $n1 = $_POST['txtn1'];
                            $n2 = $_POST['txtn2'];
                            $op = $_POST['bto'];
                            $total = 0;
                        
                        if($op == "mais")
                        {
                            $total = $n1 + $n2;
                        }
                        elseif($op == "menos")
                        {
                            $total = $n1-+ $n2;
                        }
                        elseif($op == "vezes")
                        {
                            $total = $n1 * $n2;
                        }
                        elseif($op == "dividir")
                        {
                            $total = $n1 / $n2;
                        }

                        }
                            echo $total;
                         ?>
                    </div>
                </div>
            </form>
        </div> 
    </div> 
</body>
</html>