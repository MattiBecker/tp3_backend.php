<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <p>1. Mostrar los números del 1 al 100.</p>
    <?php
    print "<p>Comienzo</p>\n";
    for ($i=1; $i < 101; $i++) {
      print "<p>$i</p>\n";
    }
    print "<p>Final</p>\n";
     ?>

     <p>2. Mostrar los números del 100 al 0.</p>
     <?php
     print "<p>Comienzo</p>\n";
     for ($i=100; $i > 0; $i--) {
       print "<p>$i</p>\n";
     }
     print "<p>Final</p>\n";
     ?>
     <br>
     <p>Números pares del 0 al 100 </p>
     <?php
     for($n=2; $n<=100; $n= $n+2){

    echo $n."</br>";
    }

     ?>
     <p>Números impares del 0 al 100 </p>
     <?php
      $i = 1;
      $n = 50;
      $impar = 1;
      while ( $i <= $n){
      	echo "$impar <br />";
      	$i = $i + 1;
      	$impar = $impar + 2;
      }
      ?>
      <p>Mostrar la suma de los números de 1 a 20.</p>
      <?php
      $i = 1;
      $n = 10;
      $impar = 1;
      while ( $i <= $n){
      echo "$impar <br />";
      $i = $i + 1;
      $impar = $impar + 2;
      }
       ?>
       <?php
       $suma=0;
       for ($i=2; $i <=20; $i= $i+2){
      	$suma+=$i;
       }
       print "$suma"
      ?>

       <p>Mostrar la suma de números pares de 1 a 20.</p>
       <?php
       $suma=0;
       for ($i=1; $i <=20; $i= $i++){
      	$suma+=$i;
       }
       print "$suma"
       ?>


  </body>
</html>
