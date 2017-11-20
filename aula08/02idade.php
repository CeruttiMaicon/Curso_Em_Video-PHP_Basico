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
    $ano = isset($_GET["ano"])?$_GET["ano"]:0;
    $idade = date("Y") - $ano;
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[sem nome]";
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
    echo "$nome nasceu no ano $ano e tem $idade de idade <br/> e é do sexo $sexo";


    ?>
    <a href="02-exercicio.html">Voltar</a>
</div>

</body>
</html>