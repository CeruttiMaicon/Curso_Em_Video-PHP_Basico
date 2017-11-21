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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e tem $i anos. <br/>";
        if ($i >=18){
            $v = "já pode votar <br/>";
            $d = "já pode dirigir. <br/>";

        }else{
            $v = "não pode votar <br/>";
            $d = "não pode dirigir.<br/>";
        }
        echo "Com essa idade você $v e também $d";
        
    ?>
</div>
</body>
</html>
 