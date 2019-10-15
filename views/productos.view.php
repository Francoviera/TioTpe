<?php
    require_once('libs/Smarty.class.php');

    class ProductView{

        private $smarty;
        private $authHelper;
        public function __construct(){
            $this->authHelper= new AuthHelper();
            $userName= $this->authHelper->getLoggedUserName();
            $this->smarty= new Smarty();
            $this->smarty->assign('baseURL', BASE_URL);
            $this->smarty->assign('userName', $userName);
        }

        public function mostrarInventario($inventario, $categorias, $error = null){
            $this->smarty->assign('titulo', 'Lista del Inventario');
            $this->smarty->assign('inventario', $inventario);
            $this->smarty->assign('error', $error);
            $this->smarty->assign('categorias', $categorias);

            $this->smarty->display('templates/productos.tpl');
        }
        public function mostrarProductosUser($productos, $categorias){
            $this->smarty->assign('titulo', 'Lista de Productos');
            $this->smarty->assign('productos', $productos);
            $this->smarty->assign('categorias', $categorias);

            $this->smarty->display('templates/productosUser.tpl');
        }
        public function detalleProducto($producto){
            $this->smarty->assign('titulo', 'Lista de Productos');
            $this->smarty->assign('producto', $producto);

            $this->smarty->display('templates/detalleProducto.tpl');
        }
        public function editarProductos($producto, $inventario, $categorias, $error = null){
            $this->smarty->assign('titulo', 'Lista de Productos');
            $this->smarty->assign('productoEdit', $producto);
            $this->smarty->assign('inventario', $inventario);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('error', $error);

            $this->smarty->display('templates/edicionProductos.tpl');
        }
        public function editarCategorias($categorias, $categoria, $error = null){
            $this->smarty->assign('titulo', 'Lista de Categorias');
            $this->smarty->assign('categoriaEdit', $categoria);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('error', $error);

            $this->smarty->display('templates/edicionCategorias.tpl');
        }
        public function home(){
            $this->smarty->assign('titulo', 'Inicio');

            $this->smarty->display('templates/home.tpl');
        }

        public function categorias($categorias, $error= null){
            $this->smarty->assign('titulo', 'Categorias');
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('error', $error);

            $this->smarty->display('templates/categorias.tpl');
        }
        public function categoriasUser($categorias){
            $this->smarty->assign('titulo', 'Categorias');
            $this->smarty->assign('categorias', $categorias);

            $this->smarty->display('templates/categoriasUser.tpl');
        }
        public function productosId($productos, $categoria){
            $this->smarty->assign('titulo', 'Categoria');
            $this->smarty->assign('productos', $productos);
            $this->smarty->assign('categoria', $categoria);
            
            $this->smarty->display('templates/id_categoria.tpl');
        }
    }