<?php 
    // $cities = array('México', 'Madrid');
    $cities[0] = [
        'name' => 'México',
        'population' => 1000000
    ];
    $cities[1] = [
        'name' => 'Puerto Varas',
        'population' => 500000 
    ];
    foreach($cities as $v) {
        echo 'Nombre: '.$v['name'];
        echo ' Población: '.$v['population'].'<hr>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doggie</title>
</head>
<body>
    
</body>
</html>