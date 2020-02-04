<?php 
    //El INDEX: en el mostraremos la salida de las vistas al ususario y tambien a traves de el enviaremos las distintas acciones que el usuario envíe al controlador.
    //require():  stablish the code from the call upon file is required, that means, that's obligatory for the operation to the program. Thus, if the stated file in the fuction require() doesn't found, this show a error: "PHP faltal error" and the program PHP stops.
    //require_once() function works the same way of require() function, unless to use this fuction, Prevents loading a file more than once, if we use the same code more than once, exist the risk of re state a variable, functions or classes.
    require_once "controllers/template.controller.php";
    $template = new ControllerTemplate();
    $template -> ctrBringTemplate();
?>