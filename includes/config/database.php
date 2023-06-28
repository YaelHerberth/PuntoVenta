<?php

class Conexion
{
    public static function conectar()
    {

        if (!defined('servidor')) define('servidor', 'localhost');
        if (!defined('nombre_bd')) define('nombre_bd', 'db_punto_venta');
        if (!defined('usuario')) define('usuario', 'root');
        if (!defined('password')) define('password', '');

        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $link = new PDO("mysql:host=" . servidor . ";dbname=" . nombre_bd, usuario, password, $opciones);
            return $link;
        } catch (Exception $e) {
            die("El error de conexión es: " . $e->getMessage());
        }
    }
}
?>