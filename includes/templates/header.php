<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/build/img/favicon.png" rel="icon">
  <link href="public/build/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/build/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/build/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/build/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/build/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="public/build/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="public/build/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="public/build/vendor/toastr/toastr.min.css">

  <!-- DataTables CSS Files -->
  <!-- <link rel="stylesheet" href="public/build/vendor/DataTables/datatables.min.css"> -->
  <link rel="stylesheet" href="public/build/vendor/DataTables/DataTables-1.13.4/css/dataTables.bootstrap5.min.css">

  <!-- Template Main CSS File -->
  <link href="public/build/css/style.css" rel="stylesheet">



  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <script src="public/build/js/jquery.js"></script>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="public/build/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="public/build/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Mi Perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Configuración</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>¿Necesitas ayuda?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Cerrar Sesión</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="<?php echo $dashboard ? 'nav-link' : 'nav-link collapsed'; ?>" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="<?php echo $punto ? 'nav-link' : 'nav-link collapsed'; ?>" href="puntoventa.php">
          <i class="bi bi-cart-check"></i>
          <span>Punto de Venta</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="<?php echo $producto ? 'nav-link' : 'nav-link collapsed'; ?>" data-bs-target="#productos-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bag"></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="productos-nav" class=" <?php echo $producto ? 'nav-content collapse show' : 'nav-content collapse'; ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="productos.php">
              <i class="bi bi-circle"></i><span>Listado</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Marca</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Modelo</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Categoria</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Proveedor</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="<?php echo $corte ? 'nav-link' : 'nav-link collapsed'; ?>" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Corte</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="<?php echo $corte ? 'nav-content collapse show' : 'nav-content collapse'; ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="corte.php">
              <i class="bi bi-circle"></i><span>Gatito</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Fiscal</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
    </ul>

  </aside><!-- End Sidebar-->