<?php
require "includes/config/database.php";

class ProductoModel
{
    static public function mdlVerListadoProductos()
    {
        $stmt = Conexion::conectar()->prepare("SELECT p.id_producto, p.nombre_producto, m.nombre_marca, mo.nombre_modelo, c.nombre_categoria, pro.nombre_proveedor,  p.precio_proovedor, p.precio_publico, p.stock, p.imagen FROM productos as p 
        LEFT JOIN marcas AS m  ON p.id_marca = m.id_marca
        LEFT JOIN modelos AS mo ON p.id_modelo = mo.id_modelo
        LEFT JOIN categorias AS c ON p.id_categoria = c.id_categoria
        LEFT JOIN proveedores AS pro ON p.id_proveedor = pro.id_proveedor");
		$stmt->execute();
		return $stmt -> fetchAll();
    }

    static public function mdlConsultaMarca()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM marcas");
		$stmt->execute();
		return $stmt -> fetchAll();
    }

    static public function mdlConsultaModelo()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM modelos");
		$stmt->execute();
		return $stmt -> fetchAll();
    }
    static public function mdlConsultaCategoria()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM categorias");
		$stmt->execute();
		return $stmt -> fetchAll();
    }
    static public function mdlConsultaProveedor()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM proveedores");
		$stmt->execute();
		return $stmt -> fetchAll();
    }

}
