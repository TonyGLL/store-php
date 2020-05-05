<?php

class Producto{

    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

    private $db;

    /* ===== CLASS CONSTRUCTOR ===== */
    public function __construct(){

        $this->db = Database::connect();
    }

    /* ===== GETTERS ===== */
    function getId(){

        return $this->id;
    }

    function getCategoria_id(){

        return $this->categoria_id;
    }
    
    function getNombre(){

        return $this->nombre;
    }

    function getDescripcion(){

        return $this->descripcion;
    }

    function getPrecio(){

        return $this->precio;
    }

    function getStock(){

        return $this->stock;
    }

    function getOferta(){

        return $this->oferta;
    }

    function getFecha(){

        return $this->fecha;
    }

    function getImagen(){

        return $this->imagen;
    }

    /* ===== SETTERS ===== */
    function setId($id){

        $this->id = $id;
    }

    function setCategoria_id($categoria_id){

        $this->categoria_id = $categoria_id;
    }

    function setNombre($nombre){

        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setDescripcion($descripcion){

        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    function setPrecio($precio){

        $this->precio = $this->db->real_escape_string($precio);
    }

    function setStock($stock){

        $this->stock = $this->db->real_escape_string($stock);
    }

    function setOferta($oferta){

        $this->oferta = $this->db->real_escape_string($oferta);
    }

    function setFecha($fecha){

        $this->fecha = $fecha;
    }

    function setImagen($imagen){

        $this->imagen = $imagen;
    }

    public function getAll(){

        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");

        return $productos;
    }

    public function getOne(){

        $producto = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()}");

        return $producto->fetch_object();
    }

    public function save(){

        $sql = "INSERT INTO productos VALUES(NULL, '{$this->getCategoria_id()}', '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, NULL, CURDATE(), '{$this->getImagen()}');";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            
            $result = true;
        }
        
        return $result;
    }

    public function edit(){

        $sql = "UPDATE productos SET nombre = '{$this->getNombre()}', descripcion = '{$this->getDescripcion()}', precio = {$this->getPrecio()}, stock = {$this->getStock()}";
        
        if ($this->getImagen() != NULL) {
            
            $sql .= ", imagen = '{$this->getImagen()}'";
        }

        $sql .= " WHERE id = {$this->getId()};";
        
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            
            $result = true;
        }
        
        return $result;
    }

    public function delete(){

        $sql = "DELETE FROM productos WHERE id = {$this->id}";
        $delete = $this->db->query($sql);

        $result = false;
        if ($delete) {
            
            $result = true;
        }
        
        return $result;
    }
}