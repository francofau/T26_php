<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T26: Ejercicio 5</title>
</head>
<body>
    <form method="post" action="pagina2.php">
        Radio:
        <input type="text" name="radio"><br><br>
        Base:
        <input type="text" name="base"><br><br>
        Altura:
        <input type="text" name="altura"><br><br>
        Lado
        <input type="text" name="lado"><br><br>
        Elegir la operación: <br>
        <input type="radio" name="operacion" value="1"/>Área de un círculo<br/>
        <input type="radio" name="operacion" value="2"/>Área de un triángulo<br/>
        <input type="radio" name="operacion" value="3"/>Área de un cuadrado<br/><br>
        <input type="submit" value=Confirmar>
    </form>
</body>
</html>