<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class=""  method="post" enctype="multipart/form-data">
            <input type="file" name="avatar" value="">
            <button type="submit" name="button">Enviar</button>
        </form>
    </body>
</html>

<?php
if ($_POST) {
    if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        $ext = strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));

        if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
            $hasta = dirname(__FILE__) .'/img/'.'nombre'.'.'.$ext ;
            $desde = $_FILES['avatar']['tmp_name'];
            move_uploaded_file($desde, $hasta);
        }else {
            var_dump('extension invalida!');
        }


    }else {
        var_dump('chino no come eso cosa, NUNCA');
    }
}



 ?>
