<?php
$titulo = "Tutorial PHP";
$lang = "php";
$text = " es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.";
$paises = ['Argentina', 'Brasil', 'Colombia', 'Chile','Bolivia','Uruguay', "Bratislava", "Antigua y Barbura"];
$name ='';
$email ='';
$paisSeleccionado = count($paises);
$errores = [];

if ($_POST) {
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$paisSeleccionado = trim($_POST['pais']);


    if ($name == null) {
        $errores['name']= "POR FAVOR COMPLETA TU NOMBRE";
    }
    if ($email == null) {
        $errores['email']= "POR FAVOR COMPLETA TU EMAIL";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email']= "POR FAVOR COMPLETA TU EMAIL CON FORMATO VALIDO";
    }
    if ($paisSeleccionado == '') {
        $errores['pais']= "POR FAVOR COMPLETA TU PAIS";
    }


    if (count($errores) == 0) {
        header('location:clase05.php');
        exit;
    }


}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <h1 style="text-decoration:underline;"><?=$titulo?></h1>
         <p>"<span style="font-weight:bold;"><?=$lang?></span> <?=$text?>"</p>

         <form class="" method="post">
             <label for="name">nombre:</label>
             <input type="text" name="name" id="name" value="<?=$name?>" placeholder="carlo">
             <br><br>
             <label for="email">email:</label>
             <input type="text" name="email" id="email" value="<?=$email?>">
             <br><br>
             <select class="" name="pais">
                 <option value="">Elegir país...</option>
                 <?php foreach ($paises as $key => $pais): ?>
                     <?php if ($paisSeleccionado == $key ): ?>
                         <option selected value="<?=$key?>"><?=$pais?></option>
                     <?php else: ?>
                         <option value="<?=$key?>"><?=$pais?></option>
                     <?php endif; ?>
                 <?php endforeach; ?>
             </select>
             <br><br>
             <button type="submit">Enviar</button>
         </form>

         <?php if (!empty($errores)): ?>
             <?php foreach ($errores as $error): ?>
                 <?php echo $error ?>
                 <?php echo "<br>" ?>
             <?php endforeach; ?>
         <?php endif; ?>

     </body>
 </html>
<pre>
 <?php
var_dump($_POST);

  ?>
