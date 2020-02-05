<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo MVC</title>

    <!-- Plugins de CSS -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Plugins de JS -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Latest comiled Fontawesome -->
    <script src="https://kit.fontawesome.com/7dbb9ee2d6.js" crossorigin="anonymous"></script>

</head>
<body>

    <!-- LOGOTIPO -->
    <div class="container-fluid">
        <h3 class="text-center py-3">Logo</h3>
    </div>
    <!-- BOTONERA -->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <!-- GET: $_GET["variable"] are Variables that pass like paramas via URL(Also known like chain of consult throught of the URL), if is the first variable this is splitted with "?" and the next are splitted with "&" -->
                
                <?php if(isset($_GET["page"])): ?>
                    <?php if($_GET["page"] == "register"): ?>
                        <li class="nav-item">
                            <a href="index.php?page=register" class="nav-link active">Registro</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?page=register" class="nav-link">Registro</a>
                        </li>
                    <?php endif ?>
                    <?php if($_GET["page"] == "ingress"): ?>
                        <li class="nav-item">
                            <a href="index.php?page=ingress" class="nav-link active">Ingreso</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?page=ingress" class="nav-link">Ingreso</a>
                        </li>
                    <?php endif ?>
                    <?php if($_GET["page"] == "table"): ?>
                        <li class="nav-item">
                            <a href="index.php?page=table" class="nav-link active">Inicio</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?page=table" class="nav-link">Inicio</a>
                        </li>
                    <?php endif ?>

                    <?php if($_GET["page"] == "exit"): ?>
                        <li class="nav-item">
                            <a href="index.php?page=exit" class="nav-link ">Salir</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?page=exit" class="nav-link">Salir</a>
                        </li>
                    <?php endif ?>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="index.php?page=register" class="nav-link active">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=ingress" class="nav-link">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=table" class="nav-link ">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=exit" class="nav-link">Salir</a>
                    </li>
                <?php endif ?>        
                
            </ul>
        </div>
    </div>

    <!-- CONTENIDO -->

    <div class="container-fluid py-5">
        <div class="container">
            <!-- ISSET: iset() is a function that determines a variable if this defined and it's not null -->
            <?php
                if(isset($_GET["page"])) {
                    if($_GET["page"] === "register" || 
                       $_GET["page"] === "ingress" ||
                       $_GET["page"] === "table" ||
                       $_GET["page"] === "exit") {
                        include 'pages/'.$_GET['page'].'.php';
                       }
                } else {
                    include "pages/register.php";
                }
            ?>
        </div>
    </div>
</body>
</html>
