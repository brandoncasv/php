<?php 
    $nombre = 'Brandon';
    $animals = ['Perro', 'Gato', 'Elefante'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola: <?php echo $nombre; ?> </h1>
    <h1> Arreglo de animales con For: 
        <?php 
            $size = count($animals);
            for($i = 0; $i < $size; $i++) {
                echo $animals[$i].PHP_EOL;
            } 

            echo '<br>'.'<br>'.'Foreach';
            foreach($animals as $v) {
                echo '<br>'. $v.PHP_EOL;
            }

            $o = 0;
            echo "<br><h1>Array with the cicle while</h1>";
            while($o < 3) {
                echo '<h2>'.$animals[$o].PHP_EOL .'</h2>';
                $o++;
            }

            echo "<br><h1>Array with the cicle while</h1>";
            $d = 0;
            do{
                echo '<h2>'.$animals[$d].PHP_EOL .'</h2>';
                $d++;
            } while($d <= 2);
        ?> 
    </h1>
</body>
</html>