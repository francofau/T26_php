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
    $euros = $_REQUEST['euros'];
    $conversion = $_REQUEST['conversion'];

    function cambioA($euro,$convertir){
        switch ($convertir) {
            case 1:
                echo $euro. ' euros equivale/n a '. $euro*129.852 .' Yenes';
                break;
            case 2:
                echo $euro. ' euros equivale/n a '. $euro * 0.86 .' Libras';
                break;
            case 3:
                echo $euro. ' euros equivale/n a '. $euro * 1.28611 .'Dólares';
                break;            
        }
    }
    cambioA($euros,$conversion);
?>
</body>
</html>