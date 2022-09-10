<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 
    <title>tp2</title>
</head>
  <h1 >ESTRUCTURAS DE CONTROL: PARTE 1</h1>

  <h2>EJERCICIOS</h2>
 <?php
 print "<h3>Ejercicio n 1:<h3>";

  $numero = 20;
  if ($numero > 0)
   {echo "Es un numero positivo";}
  ?>
  <br>

  <?php
   print "<h3>Ejercicio n 2:<h3>";

   $numero=2;
   if ($numero > 1 & $numero < 10)
   {echo "el numero es mayor que 1 y menor que 10";}
   ?>
   <br>

   <?php
   print "<h3>Ejercicio n 3:<h3>";

   $numero=13;
    if ($numero < 2)
     {echo"el numero es menor que 2";
    } 
    elseif ($numero > 10) 
    {echo"el numero es mayor que 10";
    }
    
    
    print "<h3>Ejercicio n 4:<h3>";

    $numero1=340;
    $numero2=30; 
    if ($numero1 < $numero2) 
    { print"suma"; echo $numero1 + $numero2;echo "<br>";
         print"resta"; echo $numero1 - $numero2 ;}

    elseif ($numero1 > $numero2) 
    {print"multiplicacion";echo $numero1 * $numero2 ;echo "<br>";
      print"division";echo(int)(  $numero1/ $numero2 ) ; echo "<br>";
       print"resto";echo $numero1 % $numero2 ; }

    if ($numero1 == $numero2) print "<p> Los numeros son iguales</p>\n";
    
    ?>