<!--13. Fes un programa que en pitjar un botó emuli el llançament de dos daus i ens digui què
ha sortit. Si surten dos daus iguals ha de treure un missatge dient "IGUALS".-->
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
<form action="Ex13.php" method="post">
  <input type="submit" name="submit">
</form>
<?php
$dado1=rand ( 1 , 6 );
$dado2=rand ( 1 , 6 );
echo $dado1.'  y  ' .$dado2;
echo '<br>';
if($dado1==$dado2){
    echo"igual";
}
?>
</body>
</html>