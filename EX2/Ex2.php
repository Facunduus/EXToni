//2. Escriu un programa que agafi com a entrada
el nom d'una persona i ho retorni tot en majúscules. Per exempe: Antoni Aloy -> ANTONI ALOY//
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
<h1>Nombre alreves</h1>
<form action="Ex3.php" method="post">
Nombre en minusculas: <input type="num" name="nombre"><br>
Apellidos en minusculas: <input type="num" name="apellidos"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    echo "<h1>POST</h1>";
// Fetching variables of the form which travels in URL
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $str = $nombre." " .$apellidos;
    $str = strtoupper($str);
    echo $str;
}
?>

</body>
</html>