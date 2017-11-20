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
    $n1 = $_GET["a"];

    $n2 = $_GET["b"];
    $s = $n1 + $n2;
    $m = ($n1 + $n2) / 2;
    echo "<h2>Valores recebido $n1 e $n2</h2>";
    echo "A soma entre o numero $n1 e $n2 é igual a $s <br/>";
    echo "A multiplicação é ". ($n1 * $n2). "<br>";
    echo "A subtração é ". ($n1 - $n2). "<br>";
    echo "A divisão é ". ($n1 / $n2). "<br>";
    echo "O modulo é ". ($n1 % $n2 )."<br>";
    echo "A media entre $n1 e $n2 é  $m <br>"

    ?>
</div>

</body>
</html>