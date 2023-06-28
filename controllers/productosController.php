<?php
require "models/productosModel.php";

class ProductoController
{
    static public function ctrlVerListadoProductos(){
        $respuesta = ProductoModel::mdlVerListadoProductos();
		return $respuesta;
    }
    static public function ctrlConsultaMarca(){
        $respuesta = ProductoModel::mdlConsultaMarca();
		return $respuesta;
    }
    static public function ctrlConsultaModelo(){
        $respuesta = ProductoModel::mdlConsultaModelo();
		return $respuesta;
    }
    static public function ctrlConsultaCategoria(){
        $respuesta = ProductoModel::mdlConsultaCategoria();
		return $respuesta;
    }
    static public function ctrlConsultaProveedor(){
        $respuesta = ProductoModel::mdlConsultaProveedor();
		return $respuesta;
    }
    public function AltaProducto()
    {

    }
}
