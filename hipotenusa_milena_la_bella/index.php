<?php
  $h = null;
  $b = 4;
  $a = 3;
  if(!empty($b) or !empty($a)) {
    $h = hypot($a, $b);
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hipotenusa</title>
</head>
<body>
  <h1>Hipotenusa</h1>
  <label for="altura">Altura: </label>
  3
  <label for="base">Base: </label>
  4
  <h2> Resultado: 
  <?php
    if ($h != null) {
      echo $h;
    }
  ?>
  </h2>
</body>
</html>