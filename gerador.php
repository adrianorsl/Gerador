<!DOCTYPE html>
<?php
    $nome2 = (isset($_POST['nome2']) ? $_POST['nome2'] : "") .".json";
        
?>
<html lang="pt-BR">
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
        echo "<h1 classe='soma'> Soma dos números: $soma <br>";
        $ordenar[] = sort($json) ;
        $t = count($json);
        $menor = $json[0]; 
        echo "<h1 classe='soma' > O menor número é: $menor <br>";
        $maior = $json[$t - 1];
        echo "<h1 classe='soma'> O maior número é: $maior <br>";
        $media = $soma / count($json);
        echo "<h1 clase='soma'> A media dos números é: $media <br>";
        for($i = 0; $i < count($json); $i++){
            if ($json[$i] % 2 == 0){
                $pares[$x] = $json[$i];
                $x++;
            }else{
                $impares[$imp] = $json[$i];
                $imp++;
            }

        }
        echo "<h1 classe='pares'> São pares <br>";
        for ($i = 0; $i < count($pares); $i++){
            echo $pares[$i]."<br>";
        }
        echo "<h1 classe='impares'> São impares <br>";
        for ($i = 0; $i < count($impares); $i++){
            echo $impares[$i]."<br>";
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
        echo "<h1 classe='media'> Maiores que a media <br>";
        for ($i = 0; $i < count($maiorMedia); $i++){
            echo $maiorMedia[$i]."<br>";
        }
        echo "<h1 classe='media'> Menores que a media <br>";
        for ($i = 0; $i < count($menorMedia); $i++){
            echo $menorMedia[$i]."<br>";
        }
        
        if ($primo != null){
            echo "<h1 classe='media'> São primos <br>";
            for ($i = 0; $i < count($primo); $i++){
                echo $primo[$i]."<br>";
            }
        }else{
            echo "<h1 classe='media'> Não há números primos <br>";
        }
        
        if (count($json) % 2 == 0){
            $u = count($json) / 2;
            $mediana = ($json[$u] + $json[$u+1]) / 2;
            "<h1 clase='media'> A mediana é: $mediana <br>";
        }else{
            $u = (int)(count($json) / 2);
            $mediana = $json[$u];
            echo "<h1 clase='media'> A mediana é: $mediana <br>";
        } 
       

    ?>
</body>
</html>