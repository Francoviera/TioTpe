<?php

    class ProductModel{

        private $db;

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;'      //definimos el tipo de base de datos que vamos a usar
            .'dbname=db_compras;charset=utf8'           //la tabla de donde vamos a agarrar los datos
            , 'root', '');                              //usuario--contraseña
         
        }
        public function getInventario(){
            $query = $this->db->prepare('SELECT * FROM inventario');
            $query->execute();
    
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        public function getProductosConCategorias(){
            $query= $this->db->prepare('SELECT inventario.id, inventario.nombre, inventario.cantidad, inventario.precio, categorias.tipo AS categoria FROM inventario JOIN categorias ON inventario.id_categorias_fk = categorias.id');
            $query->execute();

            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        public function getProductoConCategoria($id){
            $query= $this->db->prepare('SELECT inventario.id, inventario.nombre, inventario.cantidad, inventario.precio, inventario.id_categorias_fk, categorias.tipo AS categoria FROM inventario JOIN categorias ON inventario.id_categorias_fk = categorias.id WHERE inventario.id= ?');
            $query->execute([$id]);

            return $query->fetch(PDO::FETCH_OBJ);
        }
        public function getProductosId($id){
            $query= $this->db->prepare('SELECT * FROM inventario WHERE id_categorias_fk= ?');
            $query->execute(array($id));

            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        
        public function guardar($nombre, $precio, $cantidad, $categoria){
                $query= $this->db->prepare("INSERT INTO inventario(nombre, precio, cantidad, id_categorias_fk) VALUES(?,?,?,?)");
                $query->execute([$nombre, $precio, $cantidad, $categoria]);
        }    
        public function verificarExistencia($nombre){ 
            $query= $this->db->prepare('SELECT * FROM inventario WHERE nombre= ?');
            $query->execute(array($nombre));

            return $query->fetch(PDO::FETCH_OBJ);
        }
        public function actualizar($precio, $cantidad, $id){
            $query= $this->db->prepare("UPDATE inventario SET precio= ?, cantidad= ? WHERE id= ?");
            $query->execute(array($precio, $cantidad, $id));
        }
        public function eliminar($id){
            $query= $this->db->prepare("DELETE FROM inventario WHERE id= ?");
            $query->execute(array($id));
        }
        public function editar($nombre, $precio, $cantidad, $categoria, $id){
            $query= $this->db->prepare("UPDATE inventario SET nombre= ?, precio= ?, cantidad= ?, id_categorias_fk= ? WHERE id= ?");
            $query->execute(array($nombre, $precio, $cantidad, $categoria, $id));
        }




        

        // public function getCompras(){ 
        //     $query = $this->db->prepare('SELECT * FROM compras');
        //     $query->execute();

        //     return $query->fetchAll(PDO::FETCH_OBJ);
        // }
        // public function getProducto($nombre){
        //     $query= $this->db->prepare('SELECT FROM inventario WHERE nombre= ?');
        //     $query->execute(array($nombre));

        //     return $query->fetch(PDO::FETCH_OBJ);
        // }
        /*public function obtenerPrecio($nombre){
            $producto= $this->get($nombre);
            $valor= $producto->precio;

            return $valor;
        }
        public function calcularTotal ($cantidad, $precio){
            $total= $cantidad*$precio;

            return $total;
        }*/
    }