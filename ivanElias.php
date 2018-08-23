<?php
$mail="";

    if ($_POST) {
        $mail=trim($_POST['mail']);
        if ($mail=="") {
            echo"campo vacio";
        }
        elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
            echo "No es un mail KPO";
        }
        if ($_FILES['img']['error'] == UPLOAD_ERR_OK) {
            $ext=pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);

            if ($ext=='png') {

                $desde=$_FILES['img']['tmp_name'];
                $hasta=dirname(__FILE__).'/imagenes/'.$mail.'.'.$ext;
                move_uploaded_file($desde,$hasta);
            }else {
                echo "formato incorrecto";
            }
        }else {
            echo "no estas subiendo nada";

        }

        $usuario = [
            'email' => $mail,
            'src' =>$hasta
        ];


        $usuarioJSON = json_encode($usuario);

        file_put_contents('usuarios.json', $usuarioJSON, FILE_APPEND);

        header('location:formulario/exito.php?estado=registro');


    }

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>
     <body style="text-align:center;margin-top:100px;">
         <form class="" action="" method="post" enctype="multipart/form-data">
             <label for="email">Email: <input id="email" type="text" name="mail" value="<?=$mail?>"> </label>
             <br><br>
             <label for="img">Imagen: <input id="img" type="file" name="img" value=""> </label>
             <br><br>
             <button type="submit">Enviar</button>
         </form>
     </body>
 </html>
