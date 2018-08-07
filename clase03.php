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
// $animales = ['perro','gato','loro','nacho','taka','cesar','taka','cesar','taka','cesar','taka','cesar','taka'];
//
//  function encontrarTaka($array){
//      for ($i=0; $i< count($array); $i++) {
//         if ($array[$i] == 'taka') {
//             return $array[$i];
//         }
//     }
//  }
//
// echo encontrarTaka($animales);

// var_dump("lksdfnsdanfiuoadshjfpsdiu");


//
// $usuario = ['name'=> 'Kevin','lastname'=>'Ghio','telefono'=>'mi telefono',
// 0=> 5885];
//
//
//
// foreach ($usuario as $telma => $luis) {
//     echo "en la clave {$telma} se encuentra el dato {$luis}";
//     echo "<br>";
// }
//
// $array = range(1,12);
// var_dump($array);
// exit;
// $contador = 0;
// while ($contador < 10) {
//     $array[] = rand(1,10);
//     $contador++;
// }

// $ceu = [
// 	"Argentina"	=> ["Buenos Aires", "Córdoba", "Santa Fé"],
// 	"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
// 	"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
// 	"Francia" => ["Paris", "Nantes", "Lyon"],
// 	"Italia" => ["Roma", "Milan", "Venecia"],
// 	"Alemania" => ["Munich", "Berlin", "Frankfurt"]
// ];
//
// foreach ($ceu as $key => $value) {
//     echo "Las ciudades de $key";
//     foreach ($value as $ciudades) {
//         echo "<li> $ciudades </li>";
//     }
// }

$ceu = [
    "Colombia" => [
        "esAmericano" => true,
        "ciudades" => ["Cartagena", "Bogota", "Barranquilla"]
    ],
    "Alemania" => [
        "esAmericano" => false,
        "ciudades" => ["Munich", "Berlin", "Frankfurt"]
    ],
    "Argentina"	=> [
        "esAmericano" => true,
        "ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"]
    ],
    "Brasil" => [
        "esAmericano" => true,
        "ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"]
    ],
    "Francia" => [
        "esAmericano" => false,
        "ciudades" => ["Paris", "Nantes", "Lyon"]
    ],
    "Italia" => [
        "esAmericano" => false,
        "ciudades" => ["Roma", "Milan", "Venecia"]
    ],
];


foreach ($ceu as $key => $array) {
    if ($array['esAmericano']) {
        echo "los paises de {$key} son:";
        echo "<br>";
        foreach ($array['ciudades'] as $ciudad) {
            echo "<li> $ciudad </li>";
        }
    }
}















 ?>
