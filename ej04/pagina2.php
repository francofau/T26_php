<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguna página</title>
</head>
<body>
<?php
/*     Asigna a las variables el valor de las cajas de texto */
    $valorMinimo = $_REQUEST['vMin'];
    $valorMaximo = $_REQUEST['vMax'];
    $numero = $_REQUEST['numero'];
    for ($i=0; $i <$numero ; $i++) { 
        echo random($valorMinimo,$valorMaximo);
    }
    
    function random($vMin,$vMax){
      echo rand($vMin,$vMax)."<br>";
    }
?>    
</body>
</html>