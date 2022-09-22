<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        #navegacao{
            height: 100px;
            width: 200px;
            flex-direction: column;
        }
        
        #voltar{
            height: 40px;
            width: 40px;
            position: absolute;
            top:  10px;
            left: 10px;
            background-color: transparent;
            border: none;
        }
        #voltar > a > img{
            height: 40px;
            width: 40px;
        }
    </style>
</head>
<body>
    <header id="header">
        <button id="voltar">
            <a href="./media.php">
                <img src="../assets/voltar.svg" alt="">
            </a>
        </button>
        <h2>
            Site do Trabalho
        </h2>
    </header>
    <main>
        <div id="navegacao">
            <h3>
                Resposta
            </h3>
            <?php
                //Receber 3 valores reais e exibir a média entre eles
                $n1 = 0.0;
                $n2 = 0.0;
                $n3 = 0.0;

                $media = 0.0;
                $n1 = floatval($_POST['numero1']);
                $n2 = floatval($_POST['numero2']);
                $n3 = floatval($_POST['numero3']);
                $media = ($n1 + $n2 + $n3)/3;
                echo "<h4> $media </h4>";
            ?>
        </div>
    </main>
    <footer>
        <h3>
            Etec Antonio Devisate 
        </h3>
        <h4>
            Rafael Ribeiro dos Santos - 22157
        </h4>
    </footer>
</body>
</html>