<?php
    include_once('models/productos.model.php');
    include_once('models/categorias.model.php');
    include_once('views/productos.view.php');
    include_once('helpers/auth.Helper.php');
    
    class ProductController{
        private $modelCategory;
        private $modelProduct;
        private $view;
        private $authHelper;
        private $login;

        public function __construct() {        
            $this->modelCategory = new CategoryModel();
            $this->modelProduct = new ProductModel();
            $this->view = new ProductView();
            $this->authHelper= new AuthHelper();
            $this->login= $this->authHelper->checkLogin();
        }
        public function mostrarHome(){
            $this->view->home();
        }
        public function mostrarCategorias(){
            $categorias= $this->modelCategory->getCategorias();
            if($this->login === true){
                $this->view->categorias($categorias);;
            } else{
                $this->view->categoriasUser($categorias);;
            }
        }
        public function mostrarCategoria($id){
            $categoria= $this->modelCategory->getCategoria($id);
            $inventario= $this->modelProduct->getInventario();
            $this->view->categoria($id, $categoria, $inventario);
        }
        public function mostrarCategoriaId($params = null){
            $id = $params[':ID'];
            $productos= $this->modelProduct->getProductosId($id);
            $categoria= $this->modelCategory->getCategoriaId($id);

            $this->view->productosId($productos, $categoria);
        }
        public function mostrarProductos(){
            $productoConCategoria= $this->modelProduct->getProductosConCategorias();
            $categorias= $this->modelCategory->getCategorias();
            if($this->login  === true){
                $this->view->mostrarInventario($productoConCategoria, $categorias);
            } else{
                $this->view->mostrarProductosUser($productoConCategoria, $categorias);
            }
        }
        public function eliminarProducto($params = null){
            $id = $params[':ID'];
            $this->modelProduct->eliminar($id);

            header('Location: ../productos'); 
        }
        public function redireccionEditarProducto($params = null){
            $id = $params[':ID'];
            $inventario= $this->modelProduct->getProductosConCategorias();
            $producto= $this->modelProduct->getProductoConCategoria($id);
            $categorias= $this->modelCategory->getCategorias();
            $this->view->editarProductos($producto, $inventario, $categorias);
        }
        public function editarProducto(){
            $nombre= $_POST["nombre"];
            $precio= $_POST["precio"];
            $cantidad= $_POST["cantidad"];
            $categoria= $_POST["categoria"];
            $id= $_POST["id"];
   
            if(!empty($nombre) && !empty($precio) && isset($cantidad) && !empty($categoria) && !empty($id)){
                $this->modelProduct->editar($nombre, $precio, $cantidad, $categoria, $id);
                header("Location: productos"); 
            }else{
                $productoConCategoria= $this->modelProduct->getProductosConCategorias();
                $categorias= $this->modelCategory->getCategorias();
                $this->view->mostrarInventario($productoConCategoria, $categorias, "Complete todos los campos del formulario para poder editar");
            }
        }
        public function mostrarDetalleProducto($params = null){
            $id= $params[':ID'];
            $producto= $this->modelProduct->getProductoConCategoria($id);
            $this->view->detalleProducto($producto);
        }
        public function agregarProducto(){
            $nombre= $_POST["nombre"];
            $precio= $_POST["precio"];
            $cantidad= $_POST["cantidad"];
            $categoria= $_POST["categoria"];
            if (!empty($nombre) && !empty($cantidad) && !empty($precio) && !empty($categoria)){
                $resultado= $this->modelProduct->verificarExistencia($nombre);
                if($resultado === false){
                    $this->modelProduct->guardar($nombre, $precio, $cantidad, $categoria);
                     header("Location: productos"); 
                } else{
                    $this->modelProduct->actualizar($precio, $cantidad, $resultado->id);
                     header("Location: productos"); 
                }
            }else{
                $productoConCategoria= $this->modelProduct->getProductosConCategorias();
                $categorias= $this->modelCategory->getCategorias();
                $this->view->mostrarInventario($productoConCategoria, $categorias, "Complete todos los campos del formulario" );
            }  
        }
        public function agregarCategoria(){
            $tipo= $_POST["tipo"];
            $desc= $_POST["desc"];
            $resultado= $this->modelCategory->verificarExistencia($tipo);
            if(!empty($tipo) && !empty($desc)){
                if($resultado === false){
                    var_dump($resultado);
                    $this->modelCategory->guardar($tipo, $desc);
                        header("Location: categorias"); 
                } else{
                    $this->modelCategory->actualizar($tipo, $desc, $resultado->id);
                        header("Location: categorias"); 
                }
            } else{
                $categorias= $this->modelCategory->getCategorias();
                $this->view->categorias($categorias, "Complete todos los campos del formulario");;
            }
        }
        public function redireccionEditarcategoria($params = null){
            $id = $params[':ID'];
            $categorias= $this->modelCategory->getCategorias();
            $categoria= $this->modelCategory->getCategoriaId($id);
            $this->view->editarCategorias($categorias, $categoria);
        }
        public function editarCategoria(){
            $tipo= $_POST["tipo"];
            $desc= $_POST["desc"];
            $id= $_POST["id"];
            if(!empty($tipo) && !empty($desc) && !empty($id)){
                $this->modelCategory->editar($tipo, $desc, $id);
                header("Location: categorias");
            }else{
                $categorias= $this->modelCategory->getCategorias();
                $this->view->categorias($categorias, "Complete todos los campos del formulario para poder editar");;
            }
        }
        public function eliminarCategoria($params = null){
            $id = $params[':ID'];
            $this->modelCategory->eliminar($id);
            header("Location: ../categorias");
        }
    }