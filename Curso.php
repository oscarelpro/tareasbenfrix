<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {

	function __construct(){
  	parent::__construct();
  	$this->load->helper('form');
  	//$this->load->helper('mihelper');
  	//carga del modelos(acciones con la base de datos)
  	$this->load->model('pruebas_model');
}

function index(){
	//registros individuales
	//se posiciona en el tercer lugar de la url
	//$data['segmento']=$this->uri->segment(3);
	
	//comprobacion de la exixtencia del segmento
	/*if(!$data['segmento']){
		   
	}else{
		    $data['curso']=$this->pruebas_model->obtenerCurso($data['segmento']);
	}*/

  $data['curso']=$this->pruebas_model->obtenerCursos();
$this->load->view('pruebas/bienvenido');
$this->load->view('curso/curso',$data);


}
  function nuevo(){

    $this->load->view('pruebas/bienvenido');

  	$this->load->view('curso/formulario');
  }
  function recibirdatos(){
  	$data=array(
  		'usuario'=>$this->input->post('usuario'),
  		'password'=>$this->input->post('password')
  		);
  	 	$this->pruebas_model->crearUsuario($data);
  		$this->load->view('pruebas/bienvenido');
     $data['curso']=$this->pruebas_model->obtenerCursos();
	    $this->load->view('curso/curso',$data);

  }


  function mostrar(){
$data=array(
      'usuario'=>$this->input->post('usuario'),
      'password'=>$this->input->post('password')
      );
  $this->load->view('pruebas/bienvenido');
$data['curso']=$this->pruebas_model->obtenerCursos();
$this->load->view('curso/curso',$data); 

  }

  function editar(){
   $data['id']= $this->uri->segment(3);
   $data['curso']=$this->pruebas_model->obtenerCursos($data['id']);
$this->load->view('curso/editar',$data); 
  }
    function actualizar(){
      $data=array(
      'usuario'=>$this->input->post('usuario'),
      'password'=>$this->input->post('password')
      );
      $this->pruebas_model->actualizarCurso($idCurso=$this->uri->segment(3),$data);
      $this->load->view('pruebas/curso');

  }

}
?>
