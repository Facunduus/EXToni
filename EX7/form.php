/*7.  Fes una apliació web per gestionar la llista de la compra.*/
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
<h1>Lista de la compra</h1>
<?php
//Cream la db i les taules
$db = new Sqlite3('Compres.db');
$db->exec("CREATE TABLE IF NOT EXISTS Compres(id INTEGER PRIMARY KEY, productos TEXT not null, cantidad VARCHAR not null, unidad TEXT not null)");
?>
<?php
if(isset($_POST['submit'])){
  echo "<h1>POST</h1>";
// Fetching variables of the form which travels in URL
  $productos = $_POST['prod'];
  $cantidad = $_POST['cant'];
  $unidad = $_POST['und'];
  $stm = $db->prepare("INSERT INTO Compres(productos, cantidad, unidad) VALUES (?, ?, ?)");
  $stm->bindParam(1, $productos);
  $stm->bindParam(2, $cantidad);
  $stm->bindParam(3, $unidad);
  $stm->execute();
  header('Location: form.php');
}
else  {
    $stm = $db->prepare("SELECT * FROM Compres");
    $res = $stm->execute();

  echo '<br>';
    while ($row = $res->fetchArray()) {
     echo $row['cantidad'];
     echo '   ';
     echo $row['unidad'];
     echo '   ';
     echo $row['productos'];
     echo '   ';
     echo '<br>';
  }
}
?>
<hr>
<form action="form.php" method="post">
Producto: <input type="num" name="prod"><br>
Cantidad: <input type="num" name="cant"><br>
unidad: <input type="num" name="und"><br>
<input type="submit" name="submit">
</form>

</body>
</html>