<?php
namespace App\Controllers;
Use App\Models\Consulta_Model;
use CodeIgniter\Router\Router;

class Consulta_Controller extends baseController{

    public function contacto(){
        $data['titulo']='Vegetarian :: Contacto';
        echo view('head',$data);
        echo view('navegador');
        echo view('formulario-consulta',['validation' => $this->validator]);
        echo view('puntos-de-ventas');
        echo view('footer');
    }

    public function new (){

        $data['titulo']='Vegetarian ';
        echo view('head',$data);
        echo view('navegador');
        
        
        return view('formulario-consulta', ['validation' => $this->validator]);
    }

    public function cargarConsulta(){

        $data ['titulo'] = 'Vegetarian:: Consulta';
        echo view('head',$data);
        echo view('navegador');

        $consulta = new Consulta_Model();

       
        $consulta -> insert(
            [
                'nombreCompleto' => $this ->request->getPost('nombrecompleto'),
                'email'          => $this ->request->getPost('email'),
                'telefono'       => $this ->request->getPost('telefono'),
                'asunto'         => $this ->request->getPost('asunto'),
                'mensaje'        => $this ->request->getPost('mensaje'),
            ]
        );
        return $this->response->redirect(site_url('contacto'));

    }

    public function listarConsultas(){

        $data ['titulo']='Vegetarian :: Panel de Consultas';
        echo view('head',$data);
       
        $usuario = new Consulta_Model();
        $datos['consultas']= $usuario -> orderBy('id','ASC') -> findAll();

        return view('back/consultas/panelConsultas', $datos);

    }

    public function contestados(){

        $data ['titulo']='Vegetarian :: Panel de Consultas';
        echo view('head',$data);
       
        $usuario = new Consulta_Model();
        $datos['consultas']= $usuario -> orderBy('id','ASC') -> findAll();

        return view('back/consultas/panelContestados', $datos);

    }

    public function borrar ($id=null){

        $productos = new Consulta_Model();
        
        $datos['consultas']=$productos->where('id',$id)->first();
        $datos = [
            'contestado' => '1',
        ];

        $productos ->update($id,$datos);
        return $this->response->redirect(site_url('consultas'));
    }



}