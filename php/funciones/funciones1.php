<?php



/**
 * funcion en c normal
 * void saludar ()
 * {
 *      printf("Saludar");
 * }
 */

 function saludar()
 {
    echo "Saludar en funcion<br>";    
 }


 /**
  * funcion en c con parametros
  * int sumar(int x, int y)
  * {
  *   return x+y; 
  * }
  */
function sumar($x,$y)
{
    return $x+$y;
}

/**
 * Funcion con parametro predeterminado
 */
function sumar_especial($x,$y=10)
{
    return $x+$y;
}



saludar();
echo "Suma de 27 + 43: ".sumar(27,43)."<br>";
echo "Suma de 27 : ".sumar_especial(27,5)."<br>";





?>