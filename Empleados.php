<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

$Empleados = [["Nombre" => "Samuel", "Sueldo" => 5000],["Nombre" => "Daniel", "Sueldo" => 2100],
["Nombre" => "Jorge", "Sueldo" => 4000],["Nombre" => "Sebastian", "Sueldo" => 6000],["Nombre" => "Hector",
"Sueldo" => 1200]];

usort($Empleados, function($A, $B) {
    return $A["Sueldo"] <=> $B["Sueldo"];
});

echo "Empleados: ";
echo "<br>"; 

foreach ($Empleados as $Empleado) {
    echo $Empleado["Nombre"] . "Sueldo: " . $Empleado["Sueldo"];
    echo "<br>";
}

array_push($Empleados, ["Nombre" => "Diego", "Sueldo" => 9000]);
array_push($Empleados, ["Nombre" => "Manuel", "Sueldo" => 9800]);

echo "Empleados nuevos: "; 
echo "<br>"; 

foreach ($Empleados as $Empleado) {
    echo $Empleado["Nombre"] . "Sueldo: " . $Empleado["Sueldo"];
    echo "<br>";
}

?>

</body>
</html>