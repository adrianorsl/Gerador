<!DOCTYPE html>
<?php
    $nome2 = (isset($_POST['nome2']) ? $_POST['nome2'] : "") .".json";
        
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome2">Nome</label>
        <input type="text" name="nome2" id="nome2"><br>
        <input type="submit" name="ok" id="ok" value="ok">
    </form>
    <?php
        $arquivo = file_get_contents($nome2);
        $json = json_decode($arquivo);
        $x = 0;
        $imp = 0;
        $soma = array_sum($json);
        $ordenar[] = sort($json) ;
        for ($i = 0; $i< count($ordenar); $i++){
            echo $ordenar[$i]."<br>";
        }
        echo $maior = $ordenar[3];
        echo $teste = "teste";
        $menor = $ordenar[0]; 
        $media = $soma / count($json);
        for($i = 0; $i < count($json); $i++){
            echo $json[$i]."<br>";
            if ($json[$i] % 2 == 0){
                $pares[$x] = $json[$i];
                $x++;
            }else{
                $inpares[$imp] = $json[$i];
                $imp++;
            }

        }
        $x = 0;
        $imp = 0;
        
        $p = 0;
        for ($i = 0; $i < count($json); $i++){
            if ($json[$i] >= $media){
                $maiorMedia[$x] = $json[$i];
                $x++;
            }else{
                $menorMedia[$imp] = $json[$i];
                $imp++;
            }
            $n = $json[$i];
            $divisores = 0;
            for ($y = 2; $y < $n; $y++){
                if ($n % 2 == 0){
                    $divisores++;
                }
                if ($divisores < 1){
                    $primo[$p];
                    $p++;
                }
            }
        }
        


    ?>
</body>
</html>