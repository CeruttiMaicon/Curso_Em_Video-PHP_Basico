<!Doctype html>
<html>


<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Funcoes Aritmeticas em PHP</title>
    <style>
        h2{
            font: 15pt Arial;
            color: #297a79;
            font-weight: bold;


        }
    </style>

</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2> Valores recebidos $v1 e $v2 </h2>";
        echo "O valor absoluto de $v2 é ". abs($v2)."<br/>";
        echo "O valor de $v1 <sup>$v2</sup> é " . pow($v1,$v2);
        echo "<br/> A raiz de $v1 é " .sqrt($v1);
        echo "<br/> O valor de $v2 arredondado é " .round($v2);
        echo "<br/> O valor de $v1 em moeda e " . number_format($v1,2,",",".");


    ?>
</div>

</body>
</html>