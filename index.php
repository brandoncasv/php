<?php 
 echo '<strong> Ejercicio Uno: Arreglo impreso al derecho
 y al revés</strong>', '<br>';

 $arreglo = [
    'keyStr1' => 'Lado',
    0 => 'ledo',
    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
 ];
   foreach($arreglo as $value) {
      echo "$value, ";
   }
   echo '<br>', 'Decirlo al revés lo dudo', '<br>';

   foreach(array_reverse($arreglo) as $value) {
      echo "$value, ";   
   }
   echo '<br>', '<br>';

   echo '<strong> Ejercicio Dos: Arreglo con arreglos</strong>', '<br>';
   $paises = [
      'Mexico' => ['Monterrey', 'Querétaro', 'Guadalajara'],
      'Colombia' => ['Bogota', 'Cartagena', 'Medellin'],
      'Venezuela' => ['Caracas', 'Mérida', 'Monagas'],
   ];

   foreach ($paises as $key => $value) {
      echo "{$key}: ";
      foreach($value as $v) {
         echo "{$v}, ";
      }
      echo "<br>";
   } 
   echo "<br> <strong> Ejercicio Tres: Busca los 3 numeros mayores 
   y menores</strong> <br>";
  $array_numbers = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34,
                    57, 92, 12, 5, 61];
  sort($array_numbers);
  printf("Tres numeros mas pequeños del arreglo: ");
  for($i = 0; $i < 3 ; $i++) {
   printf("$array_numbers[$i], ");
  }
  echo '<br>', '<br>';
  rsort($array_numbers);
  printf("Tres numeros mas grandes del arreglo: ");
  for($i = 0; $i < 3 ; $i++) {
   printf("$array_numbers[$i], ");
  }
?>
