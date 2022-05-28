<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
$edad   = $_POST['edad'];
$nombre = $_POST['nombre'];
echo $edad . $nombre . "<br>";
var_dump(isset($_POST['nombrer']));
if (!isset($_POST['nombre'])) {
    $nombre = "valor por defecto";
}
$tel = [];
if (isset($_POST['tel'])) {
    $tel = $_POST['tel'];
}
foreach ($tel as $key => $value) {
    echo $value . "<br>";
}

?>

</body>

</html>