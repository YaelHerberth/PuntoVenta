<?php
define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');

function incluirTemplate(string $nombre, bool $dashboard = false , bool $punto = false , bool $producto = false, bool $corte = false )
{
    include TEMPLATES_URL . "/{$nombre}.php";
}