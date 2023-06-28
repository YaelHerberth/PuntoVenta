<?php
include "controllers/productosController.php";
$listado = ProductoController::ctrlVerListadoProductos();
// var_dump($listado);
var_dump($_POST);
?>
<script>

    
    function ObtenerValores() {

        //Obtener valores de los Inputs
        let nombre_producto = document.getElementById('txt_nombre_producto').value;
        let id_marca = document.getElementById('slc_marca').value;
        let id_modelo = document.getElementById('slc_modelo').value;
        let id_categoria = document.getElementById('slc_categoria').value;
        let id_proveedor = document.getElementById('slc_proveedor').value;
        let precio_proveedor = document.getElementById('txt_precio_proveedor').value;
        let precio_publico = document.getElementById('txt_precio_publico').value;
        let stock = document.getElementById('txt_stock').value;


        // Validar que el input nombre_producto tenga datos
        if (nombre_producto == '') {
            let nombre_producto = document.getElementById('txt_nombre_producto');
            if (nombre_producto.classList.contains('is-valid')) {
                nombre_producto.classList.remove('is-valid')
                nombre_producto.classList.add('is-invalid');
            }
            nombre_producto.classList.add('is-invalid');
        } else {
            let nombre_producto = document.getElementById('txt_nombre_producto');
            if (nombre_producto.classList.contains('is-invalid')) {
                nombre_producto.classList.remove('is-invalid');
                nombre_producto.classList.add('is-valid');
            }
            nombre_producto.classList.add('is-valid');
        }

        // Validar que el select marca tenga datos
        if (id_marca == '') {
            let id_marca = document.getElementById('slc_marca');
            if (id_marca.classList.contains('is-valid')) {
                id_marca.classList.remove('is-valid')
                id_marca.classList.add('is-invalid');
            }
            id_marca.classList.add('is-invalid');
        } else {
            let id_marca = document.getElementById('slc_marca');
            if (id_marca.classList.contains('is-invalid')) {
                id_marca.classList.remove('is-invalid');
                id_marca.classList.add('is-valid');
            }
            id_marca.classList.add('is-valid');
        }

        // Validar que el select modelo tenga datos
        if (id_modelo == '') {
            let id_modelo = document.getElementById('slc_modelo');
            if (id_modelo.classList.contains('is-valid')) {
                id_modelo.classList.remove('is-valid')
                id_modelo.classList.add('is-invalid');
            }
            id_modelo.classList.add('is-invalid');
        } else {
            let id_marca = document.getElementById('slc_modelo');
            if (id_marca.classList.contains('is-invalid')) {
                id_marca.classList.remove('is-invalid');
                id_marca.classList.add('is-valid');
            }
            id_marca.classList.add('is-valid');
        }

        // Validar que el select categoria tenga datos
        if (id_categoria == '') {
            let id_categoria = document.getElementById('slc_categoria');
            if (id_categoria.classList.contains('is-valid')) {
                id_categoria.classList.remove('is-valid')
                id_categoria.classList.add('is-invalid');
            }
            id_categoria.classList.add('is-invalid');
        } else {
            let id_categoria = document.getElementById('slc_categoria');
            if (id_categoria.classList.contains('is-invalid')) {
                id_categoria.classList.remove('is-invalid');
                id_categoria.classList.add('is-valid');
            }
            id_categoria.classList.add('is-valid');
        }

        // Validar que el select proveedor tenga datos
        if (id_proveedor == '') {
            let id_proveedor = document.getElementById('slc_proveedor');
            if (id_proveedor.classList.contains('is-valid')) {
                id_proveedor.classList.remove('is-valid')
                id_proveedor.classList.add('is-invalid');
            }
            id_proveedor.classList.add('is-invalid');
        } else {
            let id_proveedor = document.getElementById('slc_proveedor');
            if (id_proveedor.classList.contains('is-invalid')) {
                id_proveedor.classList.remove('is-invalid');
                id_proveedor.classList.add('is-valid');
            }
            id_proveedor.classList.add('is-valid');
        }

        // Validar que el input precio_proveedor tenga datos
        if (precio_proveedor == '') {
            let precio_proveedor = document.getElementById('txt_precio_proveedor');
            if (precio_proveedor.classList.contains('is-valid')) {
                precio_proveedor.classList.remove('is-valid')
                precio_proveedor.classList.add('is-invalid');
            }
            precio_proveedor.classList.add('is-invalid');
        } else {
            let precio_proveedor = document.getElementById('txt_precio_proveedor');
            if (precio_proveedor.classList.contains('is-invalid')) {
                precio_proveedor.classList.remove('is-invalid');
                precio_proveedor.classList.add('is-valid');
            }
            precio_proveedor.classList.add('is-valid');
        }

        // Validar que el input precio_publico tenga datos
        if (precio_publico == '') {
            let precio_publico = document.getElementById('txt_precio_publico');
            if (precio_publico.classList.contains('is-valid')) {
                precio_publico.classList.remove('is-valid')
                precio_publico.classList.add('is-invalid');
            }
            precio_publico.classList.add('is-invalid');
        } else {
            let precio_publico = document.getElementById('txt_precio_publico');
            if (precio_publico.classList.contains('is-invalid')) {
                precio_publico.classList.remove('is-invalid');
                precio_publico.classList.add('is-valid');
            }
            precio_publico.classList.add('is-valid');
        }

        // Validar que el input stock tenga datos
        if (stock == '') {
            let stock = document.getElementById('txt_stock');
            if (stock.classList.contains('is-valid')) {
                stock.classList.remove('is-valid')
                stock.classList.add('is-invalid');
            }
            stock.classList.add('is-invalid');
        } else {
            let stock = document.getElementById('txt_stock');
            if (stock.classList.contains('is-invalid')) {
                stock.classList.remove('is-invalid');
                stock.classList.add('is-valid');
            }
            stock.classList.add('is-valid');
        }

        let valores = {
            "nombre_producto": nombre_producto,
            "id_marca": id_marca,
            "id_modelo": id_modelo,
            "id_categoria": id_categoria,
            "id_proveedor": id_proveedor,
            "precio_proveedor": precio_proveedor,
            "precio_publico": precio_publico,
            "stock": stock
        }
    }

    $(document).ready(function() {
    $("#form_productos").submit(function() {
      var formData = $(this).serialize();
      $.ajax({
        url: "controllers/productosController.php",
        type: 'POST',
        data: formData,
        success: function(result) {
          if (result == "ok") {
            toastr["success"]("Datos registrados", "Éxito en la operación");
            $('#form_marcas').each(function() {
              this.reset();
            });
          } else {
            toastr["error"]("Ha ocurrido un error", "Error");
          }
        }
      });
      return false;
    });
  });

</script>
<div class="pagetitle">
    <h1>Listado de Productos</h1>
</div>

<div class="text-end mb-5">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalProducto"> <i class="bi bi-plus"></i> Nuevo Producto</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modalProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Nuevo Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="form_productos" name="form_productos">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input required type="text" class="form-control" id="txt_nombre_producto" name="txt_nombre_producto" placeholder="Nombre de producto">
                                <label for="txt_nombreproducto">Nombre de producto</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <select required class="form-select" id="slc_marca" name="slc_marca">
                                    <option value="" selected disabled>Selecciona marca</option>
                                    <?php $marca = ProductoController::ctrlConsultaMarca() ?>
                                    <?php foreach ($marca as $value) : ?>
                                        <option value="<?= $value['id_marca'] ?>"><?= $value['nombre_marca'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="slc_marca">Marca</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating mb-3">
                                <select required class="form-select" id="slc_modelo" name="slc_modelo">
                                    <option value="" selected disabled>Selecciona modelo</option>
                                    <?php $modelo = ProductoController::ctrlConsultaModelo() ?>
                                    <?php foreach ($modelo as $value) : ?>
                                        <option value="<?= $value['id_modelo'] ?>"><?= $value['nombre_modelo'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="slc_modelo">Modelo</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating mb-3">
                                <select required class="form-select" id="slc_categoria" name="slc_categoria">
                                    <option value="" selected disabled>Selecciona categoria</option>
                                    <?php $categoria = ProductoController::ctrlConsultaCategoria() ?>
                                    <?php foreach ($categoria as $value) : ?>
                                        <option value="<?= $value['id_categoria'] ?>"><?= $value['nombre_categoria'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="slc_categoria">Categoria</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating mb-3">
                                <select required class="form-select" id="slc_proveedor" name="slc_proveedor">
                                    <option value="" selected disabled>Selecciona proveedor</option>
                                    <?php $proveedor = ProductoController::ctrlConsultaProveedor() ?>
                                    <?php foreach ($proveedor as $value) : ?>
                                        <option value="<?= $value['id_proveedor'] ?>"><?= $value['nombre_proveedor'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="slc_proveedor">Proveedor</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <div class="form-floating">
                                    <input required type="number" step="auto" class="form-control" id="txt_precio_proveedor" name="txt_precio_proveedor" placeholder="Precio Proovedor">
                                    <label for="txt_precio_provedeor">Precio Proovedor</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <div class="form-floating">
                                    <input required type="number" step="auto" class="form-control" id="txt_precio_publico" name="txt_precio_publico" placeholder="Precio Publico">
                                    <label for="txt_precio_publico">Precio Publico</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating mb-3">
                                <input required type="number" step="auto" class="form-control" id="txt_stock" name="txt_stock" placeholder="Stock">
                                <label for="txt_stock">Stock</label>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="input-group mb 3">
                                <span class="input-group-text"><i class="bi bi-card-image"></i></span>
                                <div class="form-floating">
                                    <input type="file" type="image" accept="image/*" class="form-control" id="img" name="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" onclick="ObtenerValores()" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Clave</th>
            <th>Producto</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Categoria</th>
            <th>Proveedor</th>
            <th>Precio Proovedor</th>
            <th>Precio Publico</th>
            <th>Stock</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listado as $value) : ?>
            <tr>
                <td><?= $value['id_producto'] ?></td>
                <td><?= $value['nombre_producto'] ?></td>
                <td><?= $value['nombre_marca'] ?></td>
                <td><?= $value['nombre_modelo'] ?></td>
                <td><?= $value['nombre_categoria'] ?></td>
                <td><?= $value['nombre_proveedor'] ?></td>
                <td><?= $value['precio_proovedor'] ?></td>
                <td><?= $value['precio_publico'] ?></td>
                <td><?= $value['stock'] ?></td>
                <td>
                    <div class="img-fluid"> <img src="<?= $value['imagen'] ?>" alt="<?= $value['nombre_producto'] ?>"></div> <?= $value['imagen'] ?>
                </td>
                <td>
                    <button class="btn btn-warning"><i class="bi bi-pen"></i></button>
                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        <?php endforeach  ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Clave</th>
            <th>Producto</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Categoria</th>
            <th>Proveedor</th>
            <th>Precio Proovedor</th>
            <th>Precio Publico</th>
            <th>Stock</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>