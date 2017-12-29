<?php

function limpiarString($texto)
{
  $textoLimpio = str_replace ("\"" , "" , $texto);
  $textoLimpio = str_replace ("\'" , "" , $textoLimpio);
  $textoLimpio = str_replace ("'" , "" , $textoLimpio);
  $textoLimpio = str_replace ("&" , "" , $textoLimpio);

  return $textoLimpio;
}

 ?>
