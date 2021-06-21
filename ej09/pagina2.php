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
    $numero =$_REQUEST['numero'];
   echo 'El número '.$numero.' está formado por '.cantidad($numero).' dígito/s.';
    
    function cantidad($n){
        $cantidad=1;
        while ($n >= 10) {
           $cantidad++;
           $n= $n/10;
        }
        return $cantidad;
    }
?>
</body>
</html>