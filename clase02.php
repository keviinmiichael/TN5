<!DOCTYPE html>
<?php
$color = 'blue';

 ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body style="background-color:<?=isset($color)?$color:'white' ?>">
        <li></li>
    </body>
</html>


<?php
$color = 'FSWD';
switch ($color) {
    case 'FSWD':
        echo "El color es azul";
        break;
    default:
        echo "Es otro color ! ";
        break;
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

var_dump(dirname(__FILE__));





 ?>
