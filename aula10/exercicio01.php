<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php

    $number = isset($_GET["num"])?$_GET["num"]:0;
    $op = isset($_GET["operacao"])?$_GET["operacao"]:1;



    switch ($number){
        case 1:
            $text = "O dobro de";
            $result = $number * 2;
            break;
        case 2:
            $text = "O cubo de";
            $result = $number ^ 3;
            break;
        case 3:
            $text = "A raiz de";
            $result = sqrt($number);

    }

    echo " $text $number <span class='foco'>$result</span>";

        
    ?>
    <a href="exercicio01.html" class="botao">Voltar</a>
</div>
</body>
</html>
 