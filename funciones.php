<?php
/*Función que compara las respuestas del usuario con las reglas
del sistema y devuelve la puntuación total sumando un punto por cada coincidencia */
function calcularCoincidencias($respuestas, $reglas): int {
    $puntos = 0;
    foreach ($reglas as $campo => $valorEsperado) {
//obtengo el valor enviado de forma segura
        $valorUsuario = $respuestas[$campo] ?? '';
//comparo el valor del usuario con el valor esperado
        if ($valorUsuario === $valorEsperado) {
            $puntos++;
        }
    }
    return $puntos;
}
?>