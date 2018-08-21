<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Pruebas_model extends CI_Model{
 	function __construct(){
 		parent::__construct();
 		$this->load->database();
 	}
 	function crearUsuario($data){
 		$query=$this->db->INSERT('clientes',array('usuario'=>$data['usuario'],'password'=>$data['password']));
 	}
 	function obtenerCursos(){

 		$query=$this->db->get('clientes');
 		if($query->num_rows()>0){

 			return $query;
 		}
 		else {
 			return false;
 		}
 	}

  //en esta funcion es cuando se incluye el condicional where
  //con la finalidad de obtener registros individuales
  function obtenerCurso($id){
    $this->db->where('id_cliente',$id);
    $query=$this->db->get('clientes');
    if($query->num_rows()>0){

      return $query;
    }
    else {
      return false;
    }
  }
  function actualizarCurso($id,$data){
     $datos=array(
      'usuario'=>$data['usuario'],
      'password'=>$data['password']
      );
      $this->db->where('id_cliente',$id);
      $query=$this->db->UPDATE('clientes',$datos);
  }
 }
?>
