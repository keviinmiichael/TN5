<?php

if ($_POST) {
    setcookie('usuario', $_POST['name'], time() + 8);
}

if (!isset($_COOKIE['usuario'])) {
    header('location:logear.php');
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class=""  method="post">
            nombre: <input type="text" name="name" value="">

            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
