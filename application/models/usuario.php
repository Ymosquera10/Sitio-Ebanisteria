<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Model {


  function __construct(){
    parent::__construct();
    $this->load->library("mongodb");
    $this->load->library("session");
    $this->db = $this->mongodb->db()->usuario;

  }
  //nueva funcion
  public function buscar($Correo, $Contraseña)
  {
    $resultado = $this->db->findOne(array(
      'Correo' => $Correo,
      'Contraseña' => $Contraseña
    ));
    return $resultado;   
  }




}