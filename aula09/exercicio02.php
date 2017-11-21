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
        if (($i >=16 and $i <=18)or($i>65)){
            $tipovoto = "voto opcional";
        }elseif($i>18 and $i<=65){
            $tipovoto = "voto obrigatorio";
        }else{
            $tipovoto = "não vota";
        }
        echo "Você $tipovoto";



        
    ?>
</div>
</body>
</html>
 