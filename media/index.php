<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média | Php</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="a.png" type="image/x-icon">
</head>

<!-- Calcular e montar a média e a situação de 5 alunos:
        - Se -> nota < 3        -> reprovado;
        - Se -> nota > 3 ou < 6 -> recuperação;
        - Se -> nota >= 6       -> aprovado -->

<body>
    <center>
        <div class="container">
            <img class="backInDown" src="a.png" width="150px" alt="">
            <h1>Calcular Média</h1>
            <p>Adicione notas de 0 a 10</p>
            <form action="media.php" method="POST">
                <br><hr><br>
                <table border="1">
                    <tr>
                        <th>Nome</th>
                        <th>Nota 01</th>
                        <th>Nota 02</th>
                        <th>Nota Trabalho</th>
                    </tr>

                    <!--PHP Da criação da tabela-->
                    <?php
                    for($linha = 0; $linha < 5; $linha++){
                        echo "<tr>";
                        for($col = 0; $col < 4; $col++){
                            echo "<td><input type='text' name='nota[$linha][$col]'></td>";
                        }
                        echo "</tr>";
                    }                                                 
                    ?>

                </table> 
                <br>

                <button type="submit" value="Enviar" name="botao" class="backInDown glow-on-hover">ENVIAR</button>
            </form><br>
        </div>
    </center>

</body>

</html>