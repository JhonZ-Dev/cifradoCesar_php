<?php 

function cifradoCesar($cadena, $desplazamiento) {
    $resultado = '';
     // Iteramos sobre cada carácter de la cadena
     $longitud = strlen($cadena);

     for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        // Verificamos si es una letra
        if (ctype_alpha($caracter)) {
            // Obtenemos el código ASCII del carácter
            $codigo = ord($caracter);
            // Aplicamos el desplazamiento al código ASCII
            $codigoDesplazado = $codigo + $desplazamiento;

    
}



?>
