<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasar extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->library("mongodb");
        $this->db = $this->mongodb->db()->contacto;
    } 

   //insertar
        public function recibir($info)
        {
            $result = $this->db->insertOne($info);
			return $result->getInsertedCount();
        }

}