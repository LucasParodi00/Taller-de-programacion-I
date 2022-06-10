<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Productos_model;


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

        return redirect()->route('verCarrito');

        //id = id del producto
        //rowid = fila del producto
    }

    public function vaciarCarrito(){
        $cart = \Config\Services::cart();

        $cart->destroy();

        return redirect()->route('verCarrito');

    }



}
?>