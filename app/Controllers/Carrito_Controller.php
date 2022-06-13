<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Productos_model;
use App\Models\Usuarios_model;
use App\Models\VentaDetalle_Model;





class Carrito_Controller extends BaseController{

		

    public function agregar_carrito(){
        $request = \Config\Services::request();
        $cart = \Config\Services::cart();
        
       
            $cart->insert(array(
            'id'      => $request->getPost('id'),
            'qty'     => 1,
            'price'   => $request->getPost('precio'),
            'name'    => $request->getPost('nombre'),
            ));
        return redirect()->route ('productos');
    }

    public function verCarrito(){
        $cart = \Config\Services::cart();
        $cart = array('cart' => $cart);
        $data['titulo'] = 'Carrito';
        echo view('head',$data);
        echo view('navegador');
        echo view('carrito',$cart);
        echo view('footer');
        
    }

    public function eliminarCarrito(){
        $request = \Config\Services::request();
        $cart = \Config\Services::cart();
        
        $rowid = $request->getPostGet('rowid');

        $cart ->remove($rowid);

        return redirect()->route('carrito');

        //id = id del producto
        //rowid = fila del producto
    }

    public function vaciarCarrito(){
        $cart = \Config\Services::cart();

        $cart->destroy();

        return redirect()->route('carrito');

    }

    public function sumar_carrito(){
        $cart = \Config\Services::cart();
        $cantidad = $cart->getItem($this->request->getGet("id"))["qty"];
        //var_dump($cart->);
        $cart->update(array(
            "rowid" => $this->request->getGet("id"),
            "qty" => $cantidad+1
        ));
        return redirect()->route('carrito');
    }

    public function restar_carrito(){
        $cart = \Config\Services::cart();
        $cantidad = $cart->getItem($this->request->getGet("id"))["qty"];
        //var_dump($cart->); 
        if($cantidad > 1){ 
            $cart->update(array(
                "rowid" => $this->request->getGet("id"),
                "qty" => $cantidad-1
            ));
        }
        return redirect()->route('carrito');
    }

    public function comprar (){

        $detalleVenta = new VentaDetalle_Model();

        $cart = \Config\Services::cart();
        var_dump($cart->contents(['price']));

        $detalleVenta -> insert(array(
            'precio'  => $cart->getItem($this->request->getGet()) ['price'],

          
        ));



    }


}
?>