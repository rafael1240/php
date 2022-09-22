<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        button{
            width: 255px;
            height: 30px;
            margin-top: 20px;
            background-color: rgba(0, 0, 0, 0.075);
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        #form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        #nome{
            margin-top: 10px;
        }
        #sobre{
            margin-top: 10px;
        }
        
        #voltar{
            height: 40px;
            width: 40px;
            position: absolute;
            top: -10px;
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
            <a href="../index.php">
                <img src="../assets/voltar.svg" alt="">
            </a>
        </button>
        <h2>
            Site do Trabalho
        </h2>
    </header>
    <main>
        <div id="navegacao">
            <form action="resposta.php" id="form" method="POST">
                <p>Nome:  <input type="text" name="nome" id="nome"></p>
                <p>Sobrenome:  <input type="Text" name="sobrenome" id="sobre"></p>
                <button>
                    continuar
                </button>
            </form>
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