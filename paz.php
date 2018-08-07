<?php
$titulo = "Tutorial PHP";
$lang = "php";
$text = " es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.";



$paises = ['Argentina', 'Brasil', 'Colombia', 'Chile','Bolivia','Uruguay', "Bratislava", "Antigua y Barbura","el sitio anda muy lento en sistemas operativos windows"];
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

         <form class="" action="" method="post">
             <?php if (!isset($_GET["versionCorta"])): ?>
                 <label for="password_confirm">Confirmar Contraseña</label>
                 <input type="text" name="password_confirm" id="password_confirm" value="">
                 <br><br>
             <?php endif; ?>
             <select class="" name="pais">
                 <option value="">Elegir Pais...</option>
                 <?php foreach ($paises as $key => $pais): ?>
                     <option value="<?=$key?>"><?=$pais?></option>
                 <?php endforeach; ?>
             </select>
             <button type="submit">Enviar</button>
         </form>
     </body>
 </html>
<?php if ($_POST): ?>
    <?php echo $paises[$_POST['pais']] ?>
<?php endif; ?>
