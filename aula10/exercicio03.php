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

        $estado = isset($_GET["cEstados"])?$_GET["cEstados"]:"sem estado selecionado";

        switch ($estado){
            case "AM":
            case "RR":
            case "AP":
            case "PA":
            case "TO":
            case "RO":
            case "AC":
                echo "$estado da <span class='foco'>REGIÃO NORTE</span>";
                break;
            case "MA":
            case "PI":
            case "CE":
            case "RN":
            case "PE":
            case "PB":
            case "SE":
            case "AL":
            case "BA":
                echo "$estado da <span class='foco'>REGIÃO NORDESTE</span>";
                break;
            case "MT":
            case "MS":
            case "GO":
                echo "$estado do <span class='foco'>CENTRO-OESTE</span>";
                break;
            case "SP":
            case "RJ":
            case "ES":
            case "MG":
            echo "$estado <span class='foco'>REGIÃO SUDESTE</span>";
            break;
            case "SC":
            case "PR":
            case "RS":
                echo "$estado da <span class='foco'>REGIÃO SUL</span>";
        }



        
    ?>
    <br/>
    <input type="button" value="Voltar" onclick="history.go(-1)">
</div>
</body>
</html>
 