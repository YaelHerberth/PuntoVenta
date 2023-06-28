<?php
require 'includes/app.php';
incluirTemplate('header', false, false, true, false);
?>

<main id="main" class="main">

    <?php include __DIR__ . "/views/productos/listado.php" ?>

</main>

<?php include "includes/templates/footer.php" ?>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    function cargarModuloMarca() {
        $("#main").load("views/productos/marca.php");
    }
</script>