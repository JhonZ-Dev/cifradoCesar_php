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
            // Manejamos mayúsculas y minúsculas
            if (ctype_upper($caracter)) {
                 // Si es una letra mayúscula, ajustamos el desplazamiento
                 $codigoDesplazado = ($codigoDesplazado > ord('Z')) ? ($codigoDesplazado - 26) : $codigoDesplazado;
                 $codigoDesplazado = ($codigoDesplazado < ord('A')) ? ($codigoDesplazado + 26) : $codigoDesplazado;
                } else {
                    // Si es una letra minúscula, ajustamos el desplazamiento
                $codigoDesplazado = ($codigoDesplazado > ord('z')) ? ($codigoDesplazado - 26) : $codigoDesplazado;
                $codigoDesplazado = ($codigoDesplazado < ord('a')) ? ($codigoDesplazado + 26) : $codigoDesplazado;
                }
                 // Convertimos el código ASCII desplazado de vuelta a carácter y lo concatenamos al resultado
                $resultado .= chr($codigoDesplazado);
            } else {
                // Si no es una letra, simplemente lo agregamos al resultado sin cambios
                $resultado .= $caracter;
            }

        }

        return $resultado;

    
}



?>
