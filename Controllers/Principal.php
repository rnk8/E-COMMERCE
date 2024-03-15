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
    //vista 
    public function about()
    {
        $data['title'] = 'Servicios';
        $this->views->getView('principal', "about", $data);
    }

     //tienda
     public function shop($page)
     {
        $pagina = (empty($page)) ? 1 : $page ;
        $porPagina = 20;
        $desde = ($pagina - 1) * $porPagina;
         $data['title'] = 'Productos';
         $data['productos'] = $this->model->getProductos($desde, $porPagina);
         $data['pagina'] = $pagina;
         $total = $this->model->getTotalProductos();
         $data ['total'] = ceil($total['total'] / $porPagina);
         $this->views->getView('principal', "shop", $data);
     }

      //detallers
      public function detail($id_producto)
      {
          $data ['producto'] = $this->model->getProducto($id_producto);
          $id_categoria = $data ['producto'] ['id_categoria'];
          $data ['relacionados'] = $this->model->getAleatorios($id_categoria,  $data ['producto'] ['id']);
          $data['title'] = $data ['producto'] ['nombre'];
          $this->views->getView('principal', "detail", $data);
      }

      //vista categorias
      public function categorias($datos)
{
    $id_categoria = 1;
    $page = 1;
    $array = explode(',', $datos);
    
    if (isset($array[0]) && !empty($array[0])) {
        $id_categoria = $array[0];
    }
    
    if (isset($array[1]) && !empty($array[1])) {
        $page = $array[1];
    }
    
    $pagina = (empty($page)) ? 1 : $page;
    $porPagina = 16;
    $desde = ($pagina - 1) * $porPagina;
     
    $data['pagina'] = $pagina;
    $total = $this->model->getTotalProductosCat($id_categoria);
    $data['total'] = ceil($total['total'] / $porPagina);

    $data['productos'] = $this->model->getProductoCat($id_categoria, $desde, $porPagina);
    $data['title'] =  $id_categoria ;
    $data['id_categoria'] = 'Categorias';
    $this->views->getView('principal', "categorias", $data);
}


       //contacto
       public function contact()
       {
           $data['title'] = 'Contactos';
           $this->views->getView('principal', "contact", $data);
       }

       //vista lista deseo
       public function deseos()
       {
           $data['title'] = 'Tu lista de deseos';
           $this->views->getView('principal', "deseos", $data);
       }

       //obtener productos apartir de una Lista de Deseo
       public function listaDeseo(){
        $datos = file_get_contents('php://input');
        $json = json_decode($datos, true);
        $array['productos'] = array();
        foreach ($json as $producto) {
            $result = $this->model->getProducto($producto['idProducto']);
            $data['id'] = $result['id'];
            $data['nombre'] = $result['nombre'];
            $data['precio'] = $result['precio'];
            $data['cantidad'] = $producto['cantidad'];
            $data['imagen'] = $result['imagen'];
            
            array_push($array['productos'], $data);
        }
        $array ['moneda'] = MONEDA;
               echo json_encode($array, JSON_UNESCAPED_UNICODE);
                die();
        
       }
      
        //obtener productos apartir de una Lista decarrito
        public function listaProductos(){
            $datos = file_get_contents('php://input');
            $json = json_decode($datos, true);
            $array['productos'] = array();
            $total = 0.00;
            foreach ($json as $producto) {
                $result = $this->model->getProducto($producto['idProducto']);
                $data['id'] = $result['id'];
                $data['nombre'] = $result['nombre'];
                $data['precio'] = $result['precio'];
                $data['cantidad'] = $producto['cantidad'];
                $data['imagen'] = $result['imagen'];
                $subTotal = $result['precio'] * $producto['cantidad'];
                $data['subTotal'] = number_format($subTotal,2);
                array_push($array['productos'], $data);
                $total += $subTotal;
            }
            $array ['total'] = number_format($total,2);
            $array ['moneda'] = MONEDA;
                   echo json_encode($array, JSON_UNESCAPED_UNICODE);
                    die();
            
           }
}