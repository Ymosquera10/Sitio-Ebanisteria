<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModalProductos extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->library("mongodb");
        $this->db = $this->mongodb->db()->productos;
    }

    //insertar
    public function insertar($data, $Imagen)
    {

        $datos = array(
            "Nombrep" => $data["Nombrep"],
            "DescriP" => $data["DescriP"],
            "Medidas" => $data["Medidas"],
            "Garantia" => $data["Garantia"],
            "Valor" => $data["Valor"],
            "Descuentos" => $data["Descuentos"],
            "Promociones" => $data["Promociones"],
            "Imagen" => $Imagen["file_name"]
        );

        $resultado = $this->db->insertOne($datos);

        if ($resultado->getInsertedCount() > 0) {
            return array("guardado" => true, "id" => $resultado->getInsertedId());
        } else {
            return array("Error" => false);
        }
    }
    //listar
    public function listar()
    {
        try {
            return $this->db->find();

        } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }

    /**eliminar un producto siempre y cuando sea igual al que enviamos por parametro*/
    public function delete($id)
    {
        return $resultado = $this->db->deleteOne(
            array(
                '_id' => $this->mongodb->getObjetId($id)
            )
        );
    }


    public function traer1($id)
    {
        return $resultado = $this->db->findOne(
            array(
                '_id' => $this->mongodb->getObjetId($id)
            )
            
        );
    
        $this->db->updateOne('productos', $resultado);
    }


    public function actualizar($id, $data)
    {
        $resultado = $this->db->updateOne(
            array(
                '_id' => $this->mongodb->getObjetId($id)
            ),
            array(
                '$set' => $data
            )
        );
        return $resultado->getModifiedCount();
    }

    




}