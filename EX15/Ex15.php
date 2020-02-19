<!--15. Escriu un programa que donada una frase la giri. Per exemple: HOLA -> ALOH-->
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<form action="Ex15.php" method="post">
  Escribe una frase: <input type="num" name="frase"><br>
  <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    $frase=$_POST['frase'];
    echo strrev($frase);
}
?>
</body>
</html>