<?php
    require_once('controllers/productos.controller.php');
    require_once('controllers/login.controller.php');
    require_once('Router.php');

    define('BASE_URL', 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();

    $r->addRoute("login", "GET", "LoginController", "mostrarLogin");
    $r->addRoute("logIn", "POST", "LoginController", "verificarLogin");
    $r->addRoute("logout", "GET", "LoginController", "logout");
    $r->addRoute("registrarse", "GET", "LoginController", "mostrarSingup");
    $r->addRoute("singup", "POST", "LoginController", "singup");
    $r->addRoute("home", "GET", "ProductController", "mostrarHome");
    $r->addRoute("productos", "GET", "ProductController", "mostrarProductos");
    $r->addRoute("detalleProducto/:ID", "GET", "ProductController", "mostrarDetalleProducto");
    $r->addRoute("agregarProducto", "POST", "ProductController", "agregarProducto");
    $r->addRoute("editarProducto/:ID", "GET", "ProductController", "redireccionEditarProducto");
    $r->addRoute("formEditarProducto", "POST", "ProductController", "editarProducto");
    $r->addRoute("eliminarProducto/:ID", "GET", "ProductController", "eliminarProducto");
    $r->addRoute("categorias", "GET", "ProductController", "mostrarCategorias");
    $r->addRoute("agregarCategoria", "POST", "ProductController", "agregarCategoria");
    $r->addRoute("eliminarCategoria/:ID", "GET", "ProductController", "eliminarCategoria");
    $r->addRoute("editarCategoria/:ID", "GET", "ProductController", "redireccionEditarCategoria");
    $r->addRoute("formEditarCategoria", "POST", "ProductController", "editarCategoria");
    $r->addRoute("categoria/:ID", "GET", "ProductController", "mostrarCategoriaId");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
?>