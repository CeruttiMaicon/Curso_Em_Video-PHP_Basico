<!DOCTYPE html>
<html>
<head>
    <?php
    $nota1 = isset($_GET["iNota1"])?$_GET["iNota1"]:"sem nota";
    $nota2 = isset($_GET["iNota2"])?$_GET["iNota2"]:"sem nota";

    $media = ($nota1 + $nota2) / 2;

    if ($media>=7){
        $situacao = "APROVADO";
        $color = "#00FF00";
    }else{
        $color = "#FF0000";
        $situacao = "#REPROVADO";
    }
    ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
    <style >
        span.corMedia{
            color: <?php  echo $color; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php



    echo "A média do aluno é: <span class='corMedia'>$media</span> <br/>Aluno: <span class='corMedia'>$situacao</span>  "
    ?>
    <br/>
    <input type="submit" id="iButton" name="button" value="Voltar" onclick="history.go(-1)">
</div>

</body>
</html>

