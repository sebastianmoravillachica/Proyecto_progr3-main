  <?php
  require "shared/dashEncabezado.php";
  $page = isset($_GET["page"]) ? $_GET["page"] : "";

  ?>

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php

    switch ($page) {
      case 'Usuarios':

        $titulo = "Catálogo Usuarios";
        require "catalogos/menu_usuarios/listUsuario.php";

        break;
      case 'Menu':
        $titulo = "Catálogo Menú";
        require "catalogos/menu_usuarios/listMenu.php";
        break;

      case 'nuevoMenu':
        $titulo = "Nueva Menú";
        require "catalogos/menu_usuarios/nuevoMenu.php";
        break;

      case 'nuevoUsuario':
        $titulo = "Nuevo Usuario ";
        require "catalogos/menu_usuarios/nuevoUsuario.php";
        break;


      default:
        $titulo = "Bienvenido";
        break;
    }



    ?>
  </main>

  <?php require "shared/dashPie.php" ?>