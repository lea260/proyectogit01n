<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pagina 2</title>
</head>

<body>
  <h1>Crear Persona</h1>
  <form action="recibir.php" method="post">
    <label for="edad">edad</label>
    <input type="text" name="edad" id="edad" value="25">
    <label for="">nombre</label>

    <input type="text" name="nombre">
    <label for="">nombre</label>
    <h1>telefonos</h1>
    <input type="text" name="tel[]" value="tel01">
    <input type="text" name="tel[]" value="tel02">
    <input type="text" name="tel[]" value="tel03">
    <br>
    elija pais
    <?php $listaPaises = ["Uruguay", "Argentina", "Brasil"];
$pais                  = "Uruguay";?>
    <select name="" id="">
      <?php for ($i = 0; $i < count($listaPaises); $i++) {
    if ($listaPaises[$i] == $pais) {
        ?><option value="" selected><?=$pais;?></option>
      <?php } else {
        ?><option value=""><?=$listaPaises[$i];?></option>
      <?php }}
;?>

    </select>
    <h2>radio</h2>
    <br>
    <input type="radio" name="operacion" value="suma">sumar
    <br>
    <input type="radio" name="operacion" value="resta">restar
    <br>
    <input type="submit" value="enviar">
  </form>
</body>

</html>