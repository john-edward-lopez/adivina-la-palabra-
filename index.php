<?php

$palabras = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");

$palabrasDesordenadas = array();

$form = "<form action='analisis.php'>";


for ($i = 0; $i < count($palabras); $i++) {
  $form .= "La palabra: " . str_shuffle($palabras[$i]) . " " .
    "<input type = 'text' name = 'palabra" . $i . "'>" .
    "<br/>";
}

$button = " <button type = 'submit' >Enviar</button>";

$formCierre = "</form>";

//print_r($palabrasDesordenadas);

echo $form . $button . $formCierre;
