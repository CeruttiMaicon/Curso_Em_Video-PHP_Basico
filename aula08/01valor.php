<!Doctype html>
<html>


<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Aula054</title>

</head>
<body>
<div>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor é " . number_format($rq,2);


    ?>
    <a href="01-exercicio.html">Voltar</a>
</div>

</body>
</html>