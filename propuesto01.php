<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propuesto 01 - Importe Total</title>
</head>
<body>
    <form method="post" action="">
        Ingresar Importe Total:<br> <input type="text" name="importe_total"><br>
        Ingresar Cantidad de Hijos:<br> <input type="text" name="cant_hijos"><br>
        Resultado :<br>
        <input type="submit" name="Calcular" id="Calcular"><br><br>
    </form>
    <?php
    // declaración de variables
    $importe_total = $_POST['importe_total'];
    $cant_hijos = $_POST['cant_hijos'];

    $bonificacion = 50 * $cant_hijos;
    $comision = $importe_total*(7.5/100);
    $sueldo_bruto = 600 + $comision + $bonificacion;
    $descuento = $sueldo_bruto*(11/100);
    $sueldo_neto = $sueldo_bruto - $descuento;

    echo "La Bonificación es: " . $bonificacion."<br>";
    echo "La comisión es: " . $comision."<br>";
    echo "El Sueldo Bruto es: " . $sueldo_bruto."<br>";
    echo "El Descuento es: " . $descuento."<br>";
    echo "El Sueldo Neto es: " . $sueldo_neto."<br>";
    ?>
</body>
</html>