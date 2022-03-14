<?php
    
    echo "<h1>Situação dos Alunos :</h1>";
    echo "<hr>";
    echo "<br>";
       
    //Receber os valores do vetor
    $alunos = $_POST["nota"];    
    
    //Volta a url da pagina, caso situação vazia
    if(!$_POST){
        header('location:index.php');
    }

    for($linha = 0; $linha < 5; $linha++){
        $media = 0;

        for($col = 1; $col < 4; $col++){
            //verificar se a entrada das notas são números maiores que 0 e menores que 10
            if(is_numeric($alunos[$linha][$col]) && $alunos[$linha][$col] >= 0 && $alunos[$linha][$col] <= 10)
            {
                $media += $alunos[$linha][$col];
            }else{
                //Mensagem de Erro
                $media = "<p>ERRO ! -> Verifique as notas do aluno : " .($linha+1). "</p>";
                break;
            }           
        }

        //Se todos os campos forem verdadeiros, a operação inicia
        if(is_string($media)){
            echo"$media<br>";
        }else{
            $media = $media / 3;
            $media = number_format($media, 2, ',', '.');
        
        //verificar situação: Reprovado, Recuperação, Aprovado
            if($media < 3){
                echo "<p>{$alunos[$linha][0]} está Reprovado! Com a média: $media</p>";
            }else if ($media >= 6){
                echo "<p>{$alunos[$linha][0]} está Aprovado! Com a média: $media</p>";
            }else{
                echo "<p>{$alunos[$linha][0]} está de Recuperação! Com a média: $media</p>";
            }
        }        
    } 
    echo "<br><center><img width='150px' src='a.png'></center>";

    //Estilos CSS para a página de resposta
    echo "<style> body{
        background: #383838;
        color: white;
        font-family: monospace;
        font-size: 20px;
    } 
    hr{
        width: 500px;
    }
    h1{
        display: flex;
        justify-content: center;
        margin-top:40px;
    }
    p{
        display: flex;
        justify-content: center;
    }
    </style> ";   
?>