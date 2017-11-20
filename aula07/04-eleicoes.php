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
        $ano = $_GET["an"];
        $idade = 2017 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos <br/>";
        $tipo = ($idade >=18 and $idade <65)?"PRECISA VOTAR":"NÃO PRECISA VOTAR";
        echo "E dessa forma seu voto é $tipo"


    ?>
</div>

</body>
</html>