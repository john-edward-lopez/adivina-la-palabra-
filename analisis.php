<?php
//print_r($_REQUEST);
echo "<br/>";

$palabras = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");

for ($i = 0; $i < count($palabras); $i++) {
    if ($_REQUEST["palabra" . $i] == $palabras[$i]) {
        echo "La palabra inglesada es correcta ";
        echo "<br/>";
    } else {
        echo "La palabra inglesada es incorrecta, la palabra correcta es : " . $palabras[$i];
        echo "<br/>";
    }
}


/**if ($_REQUEST["palabra0"] == $palabras[0]) {
    echo "La palabra inglesada es correcta ";
    echo "<br/>";
} else {
    echo "La palabra inglesada es incorrecta, la palabra ccorrecta es : " . $palabras[0];
    echo "<br/>";
}

if ($_REQUEST["palabra1"] == $palabras[1]) {
    echo "La palabra inglesada es correcta ";
    echo "<br/>";
} else {
    echo "La palabra inglesada es incorrecta, la palabra ccorrecta es : " . $palabras[1];
    echo "<br/>";
}

if ($_REQUEST["palabra2"] == $palabras[2]) {
    echo "La palabra inglesada es correcta ";
    echo "<br/>";
} else {
    echo "La palabra inglesada es incorrecta, la palabra ccorrecta es : " . $palabras[2];
    echo "<br/>";
}
 **/
