<?php

$array_comentarios = array (

    '20200923135023' => array('id_producto' => '1', 
    'correo' => 'c1@hotmail.com', 
    'comentario' => 'Excelente', 
    'puntuacion' => '\ 2605 \ u2605 \ u2605 \ u2605 \ u2605'),

    '20200921152103' => array ('id_producto' => '4',
     'correo' => 'c2@hotmail.com', 
     'comentario' => 'Muy bueno', 
     'puntuacion' => '\ 2605 \ u2605 \ u2605 \ u2605'),

     '20200920101145' => array ('id_producto' => '6',
     'correo' => 'c4@hotmail.com', 
     'comentario' => 'Bueno', 
     'puntuacion' => '\ 2605 \ u2605 \ u2605'),

     '20200917094525' => array ('id_producto' => '3',
     'correo' => 'c5@hotmail.com', 
     'comentario' => 'Malo', 
     'puntuacion' => '\ u2605 \ u2605'),

     '2020091021033' => array ('id_producto' => '2',
     'correo' => 'c6@hotmail.com', 
     'comentario' => 'Genial!', 
     'puntuacion' => '\ 2605 \ u2605 \ u2605 \ u2605 \ u2605'),

);

$fp = fopen('comentarios.json', 'w');
fwrite($fp, json_encode($array_comentarios));
fclose($fp);

$fp = fopen ('comentarios.json', 'r');
$json_comentarios = fread($fp, filesize('comentarios.json'));
fclose($fp);

$array_comentarios = json_decode($json_comentarios, true);

echo '<pre>';
print_r($array_comentarios);
echo '</pre>';


?>