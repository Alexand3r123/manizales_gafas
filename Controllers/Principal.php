<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        
    }

    //Acerca de nosotros

    public function about()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('principal', "about", $data);
    }

    //Tienda - Productos

    public function shop($page)
    {
        $pagina = (empty($page)) ? 1 : $page;
        $porPagina = 12;
        $desde = ($pagina - 1) * $porPagina;
        $data['title'] = 'Nuestros Productos';
        $data['productos'] = $this->model->getProductos($desde, $porPagina);
        $data['pagina'] = $pagina;
        $total = $this->model->getTotalProductos();
        $data['total'] = ceil($total['total'] / $porPagina);
        $this->views->getView('principal', "shop", $data);
    }

    //

    public function detail($id_producto)
    {
        $data['producto'] = $this->model->getProducto($id_producto);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }

    //Contacto

    public function contact()
    {
        $data['title'] = 'Contacto';
        $this->views->getView('principal', "contact", $data);
    }

}

?>