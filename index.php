<!DOCTYPE html>
<?php
    $titulo = "Json";
    $nome = (isset($_POST['nome']) ? $_POST['nome'] : "") .".json";
    $valores = isset($_POST['valores']) ? $_POST['valores'] : 0;
    $inicio = isset($_POST['inicio']) ? $_POST['inicio'] : 0;
    $fim = isset($_POST['fim']) ? $_POST['fim'] : 0;
    
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?=$titulo?></title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="valores">Valores</label>
        <input type="number" name="valores" id="valores"><br>
        <label for="inicio">Inicio</label>
        <input type="number" name="inicio" id="inicio"><br>
        <label for="fim">Fim</label>
        <input type="number" name="fim" id="fim"><br> 
        <input type="submit" name="ok" id="ok" value="ok">
    </form>
    <?php
       
        if ($nome != ".json"){
            for ($x = 0; $x < $valores; $x++){
                $resultado[$x] = rand($inicio, $fim);
            }
            $dados_json = json_encode($resultado);
            $fp = fopen($nome, "w");
            fwrite($fp, $dados_json);
            fclose($fp);
            header('Location: gerador.php');
        }else{
            
        }
    ?>

</body>
</html>