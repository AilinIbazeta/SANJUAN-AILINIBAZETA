<?php

//Para capturar la info que se ingresa en los imputs del formulario tengo que crear variable

$nombre = $_POST['nombre']; //en los corchetes colocamos lo que le pusimos a name
$email = $_POST['email'];
$mensaje= $_POST['textarea'];

//a quien le mando esta tarea
$para = 'ibazetaailin@gmail.com';
$asunto = 'Este mail fue enviado desde la web san juan';

//funcion
mail($para, $asunto, utf8_decode($nombre,$mail,$mensaje));

//funcion que redirecciona al usuario una vez completo el form

header()


?>