<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="/css/master.css">
    </head>
    <body>
        <?php require_once('navbar.php') ?>
        

        <?php
            $usuario = [
                'name' => 'Kevin',
                'lastname' => 'Ghio',
                'phone' => 'Mi telefono',
                'pass' => 'Pass'
            ];
            $usuario[] = '788';


            if ($usuario) {
                var_dump($usuario);
            }

        ?>

        <?php include('footer.php') ?>
    </body>


    <?php
echo "asdasadasdsaddsdssadads";
    ?>






</html>
