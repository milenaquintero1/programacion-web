<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de empleados</title>
</head>
<body>
    <h1>Lista de empleados</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Sueldos</th>
            <th>Departamento</th>
            <th>Lugar de Trabajo</th>
        </tr>
        <?php
            $emps = array(array("nombre" => "Milena", "apellido" => "Quintero", "cedula" => "29.543.555", "sueldo" => "2.000.000 Bs", "departamento" => "secretaria", "lugar" => "clinica"));
            array_push($emps, array("nombre" => "Carlos", "apellido" => "Rodriguez", "cedula" => "21.531.756", "sueldo" => "1.000.000 Bs", "departamento" => "administracion", "lugar" => "la sagrada familia"));
            array_push($emps, array("nombre" => "Alexander", "apellido" => "Belloso", "cedula" => "9.367.776", "sueldo" => "10.000.000 bs", "departamento" => "medico", "lugar" => "la paraiso"));
        
            foreach ($emps as $e) {
                echo "<tr>";
                echo "<td> ".$e["nombre"]." </td>";
                echo "<td> ".$e["apellido"]." </td>";
                echo "<td> ".$e["cedula"]." </td>";
                echo "<td> ".$e["sueldo"]." </td>";
                echo "<td> ".$e["departamento"]." </td>";
                echo "<td> ".$e["lugar"]." </td>";
                echo "</tr>";
            } 
        ?>
    </table>
</body>
</html>