<?php

function validar($data){
    $name = trim($data['name']);
    $email = trim($data['email']);
    $pais = trim($data['pais']);
    $pass = trim($data['pass']);
    $rpass = trim($data['rpass']);
    $errores = [];

    if ($name == '') {
        $errores['name']  = 'Por favor compelta tu nomre';
    }
    if ($email == '') {
        $errores['email']  = 'Por favor compelta tu email';
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errores['email']  = 'Por favor compelta tu email con un formato valido';
    }elseif (traerEmail($email)) {
        $errores['email']  = 'Este mail ya esta registrado';
    }
    if ($pais == '') {
        $errores['pais']  = 'Por favor compelta tu pais';
    }
    if ($pass == '' || $rpass == '') {
        $errores['pass']  = 'Por favor compelta tus contraseñas';
    }elseif ($pass != $rpass) {
        $errores['pass']  = 'Tus contraseñas no coinciden';
    }
    return $errores;
}

function guardarUsuario($data){
    $usuario = [
        "name" => $data['name'],
        "email" => $data['email'],
        "pais" => $data['pais'],
        "pass" => password_hash($data['pass'], PASSWORD_DEFAULT),
    ];

    $usuarioJSON = json_encode($usuario);


    file_put_contents('usuarios.json', $usuarioJSON . PHP_EOL, FILE_APPEND);

}

function traerTodos(){
    $allUsers = file_get_contents('usuarios.json');

    $arrayDeJSON = explode(PHP_EOL, $allUsers);

    array_pop($arrayDeJSON);

    $arrayPHP = [];
    foreach ($arrayDeJSON as $key => $unUsuarioJSON) {
        $arrayPHP[] = json_decode($unUsuarioJSON, true);
    }
    echo "<pre>";
    var_dump($arrayPHP);exit;
    return $arrayPHP;
}

function traerEmail($email){
    $usuarios = traerTodos();

    foreach ($usuarios as $usuario) {
        if ($usuario['email'] == $email) {
            return $usuario;
        }
    }
    return false;
}
