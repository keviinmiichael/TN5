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

    if ($_FILES['avatar']['error'] != UPLOAD_ERR_OK) {
        $errores['avatar']  = 'CHE SUBI LA FOTITOS';
    }


    return $errores;
}

function guardarUsuario($data,$archivo){
    $ext = strtolower(pathinfo($_FILES[$archivo]['name'],PATHINFO_EXTENSION));
    $usuario = [
        'id' => traerUltimoID(),
        "name" => $data['name'],
        "email" => $data['email'],
        "pais" => $data['pais'],
        "pass" => password_hash($data['pass'], PASSWORD_DEFAULT),
        "src" => 'img/'. $data['email'].'.'.$ext
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

function guardarFoto($data){
    $errores = [];
    $ext = strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));
    if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
        $aDonde = dirname(__FILE__) .'/img/'. $data['email'].'.'.$ext ;
        $desde = $_FILES['avatar']['tmp_name'];
        move_uploaded_file($desde, $aDonde);
    }else {
         $errores['avatar']  = 'Solo se puede subir, jpg y png';
    }
    return $errores;
}

function traerPorID($id){
    $usuarios = traerTodos();

    foreach ($usuarios as $usuario) {
        if ($usuario['id'] == $id) {
            return $usuario;
        }
    }
    return false;
}

function validarLogin($data){
    $email = trim($data['email']);
    $pass = trim($data['pass']);
    $errores = [];

    if ($email == '') {
        $errores['email']  = 'Por favor compelta tu email';
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errores['email']  = 'Por favor compelta tu email con un formato valido';
    }elseif (!$usuario = traerEmail($email)) {
        $errores['email']  = 'mail no existe';
    }

    if ($pass == '') {
        $errores['pass']  = 'Por favor compelta tus contraseñas';
    }elseif (!password_verify($pass, $usuario['pass'])) {
        $errores['pass']  = 'contraseña invalida';
    }

    return $errores;
}

function traerUltimoID(){
    $todos = traerTodos();
    if (count($todos) == 0) {
        return 1;
    }
    $ultimo = array_pop($todos);
    $ultimoID = $ultimo['id'];

    return $ultimoID +1;
}
