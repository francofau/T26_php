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

  function verificarClaves($cla1, $cla2)
  {
    if ($cla1 != $cla2)
      echo "Claves distintas", "<br>";
  }

  verificarClaves($_REQUEST['clave1'], $_REQUEST['clave2']);
    echo "Se verificaron las claves ingresadas";
?>
  
</body>
</html>