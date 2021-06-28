<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el area de un Octagono Regular</title>
</head>
<body>
    <h1>Calcular el area de un Octagono Regular</h1>
    <form method="post">
        <label for="lados">Ingrese el tamaño de los lados: </label>
        <input type="text" name="lados">
        <label for="apotema">Ingrese el tamañ de la apotema: </label>
        <input type="text" name="apotema">
        <input type="submit" name="btn" value="Calcular">
    </form>
    <?php
        $area = null;
        if(isset($_POST['apotema']) && isset($_POST['lados'])) {
            $apotema = $_POST['apotema'];
            $lados = $_POST['lados'];
            if(!empty($apotema) or !empty($lados)) {
                $area = 4 * $lados * $apotema;
            }
        }

        if ($area != null) {
            echo "<h2> Con un tamaño de los lados de: $lados </h2>";
            echo "<h2> Y con un apotema de: $apotema </h2>";
            echo "<h2>El area del octagono es de: $area </h2>";
        }
    ?>
</body>
</html>