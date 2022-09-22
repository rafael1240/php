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
            <a href="./quadrado.php">
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
                //Receber um valor e exibir o quadrado, o dobro e a metade, deste
                $n1 = 0.0;
                $quadrado = 0.0;
                $dobro = 0.0;
                $metade = 0.0;

                $n1 = floatval($_POST['numero1']);
                $quadrado = ($n1 * $n1 * $n1 *$n1);
                $dobro = ($n1* 2.0);
                $metade = ( $n1 / 2.0);
                echo "<h4> Quadrado: $quadrado </h4>";
                echo "<h4> Dobro: $dobro </h4>";
                echo "<h4> Metade: $metade </h4>";
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