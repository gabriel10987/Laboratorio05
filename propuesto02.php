<?php 
$precio_actual = $_POST['precio_actual'];
$cant_unidades = $_POST['cant_unidades'];

$nuevo_precio = $precio_actual - ($precio_actual * 0.05);
$importe_compra  = $nuevo_precio * $cant_unidades;
$importe_descuento = $importe_compra * 0.07;
$importe_pagar = $importe_compra - $importe_descuento;
$obsequio = $cant_unidades * 2;

echo "El nuevo precio es: " .$nuevo_precio."<br>";
echo "El importe de compra es: " .$importe_compra."<br>";
echo "El importe de descuento es: " .$importe_descuento."<br>";
echo "El importe a pagar es: " .$importe_pagar."<br>";
echo "El obsequio es: " .$obsequio
?>