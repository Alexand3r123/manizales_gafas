<?php
class PrincipalModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getProducto($id_producto)
    {
        $sql = "SELECT p.*, c.categoria FROM productos  p INNER JOIN categorias c ON p.id_categoria = c.id WHERE p.id = $id_producto";
        return $this->select($sql);
    }

    //Paginador
    public function getProductos($desde, $porPagina)
    {
        $sql = "SELECT * FROM productos LIMIT $desde, $porPagina";
        return $this->selectAll($sql);
    }

    //Total productos
    public function getTotalProductos()
    {
        $sql = "SELECT COUNT(*) AS total FROM productos";
        return $this->select($sql);
    }
    
}
 
?>