<?php


// $contador = 5;
// 	while ($contador > 0) {
// 	echo $contador;
// 	$contador--;
// /* Es lo mismo que
// $contador = $contador - 1 */
// }

// $cantidad = 5;
// 	do {
//         $cantidad--;
// 		echo $cantidad;
// } while ($cantidad > 0);

// $animales = ['perro','gato','loro','nacho','taka','cesar','taka','cesar','taka','cesar','taka','cesar','taka'];
//
// for ($i=0; $i< count($animales); $i++) {
//     if ($animales[$i] == 'taka') {
//         break;
//     }
//     echo "$animales[$i]";
//     echo "<br>";
// }
// $animales = ['perro','gato','loro','nacho','taka','cesar','taka','cesar','taka','cesar','taka','cesar','taka'];
//
//  for ($i=0; $i< count($animales); $i++) {
//     if ($animales[$i] == 'taka') {
//         return 90454059;
//     }
//     echo "$animales[$i]";
//     echo "<br>";
// }
$animales = ['perro','gato','loro','nacho','taka','cesar','taka','cesar','taka','cesar','taka','cesar','taka'];

 function encontrarTaka($array){
     for ($i=0; $i< count($array); $i++) {
        if ($array[$i] == 'taka') {
            return $array[$i];
        }
    }
 }

echo encontrarTaka($animales);

// var_dump("lksdfnsdanfiuoadshjfpsdiu");




 ?>
