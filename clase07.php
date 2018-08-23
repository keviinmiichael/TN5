<?php

// $usuario = [
//     'name' => 'Nachito',
//     'lastname'=> 'genio',
//     'email' => 'nachito@genio.com'
// ];
//
// echo "<pre>";
//
// var_dump($usuario);
//
// echo "<br>";echo "<br>";echo "<br>";
//
// $usuarioJSON = json_encode($usuario);
//
// var_dump($usuarioJSON);
//
// $usuarioPHP = json_decode($usuarioJSON,true);
//
// var_dump($usuarioPHP);


$categorias = file_get_contents('categorias.json');
var_dump($categorias);

$catArr = explode(',', $categorias);

echo "<pre>";

var_dump($catArr);
 ?>
