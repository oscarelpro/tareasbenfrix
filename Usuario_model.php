<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Usuario_model extends CI_Model{
 	public $variable;
 	function __construct(){
 		parent::__construct();
 		$this->load->database();
 	
 	}
 	public function login($username,$password){
 		$this->db->where('usuario',$username);
 		$this->db->where('password',$password);
 		$resultado=$this->db->get('clientes');
 		if($resultado->num_rows()>0){
 			return true;
 		}else{
 			return false;
 		}

 	}
 }
 ?>