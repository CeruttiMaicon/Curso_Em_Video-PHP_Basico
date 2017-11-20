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
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior e " .--$atual;

    ?>
</div>

</body>
</html>