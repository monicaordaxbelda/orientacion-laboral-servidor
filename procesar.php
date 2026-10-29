<?php
//incluyo los datos y las funciones de manera modular
require 'datos.php';
require 'funciones.php';
// Recogemos las respuestas enviadas por POST de forma segura usando el operador de fusión de null
$respuestas = [
    'horario' => $_POST['horario'] ?? '',
    'metodo' => $_POST['metodo'] ?? '',
    'repaso' => $_POST['repaso'] ?? ''
];
// Calculamos las coincidencias llamando a la función externa
$puntos = calcularCoincidencias($respuestas, $reglas);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="card">
    <h2>Resultado de tu Evaluación</h2>
    <div class="resultado-box">
        <p>Has conseguido <strong><?php echo $puntos; ?> / 3 puntos</strong>.</p>
        <p><?php echo $mensajes[$puntos] ?? "Resultado procesado correctamente."; ?></p>
    </div>
    <a href="formulario.html">← Volver al formulario</a>
</div>
</body>
</html>