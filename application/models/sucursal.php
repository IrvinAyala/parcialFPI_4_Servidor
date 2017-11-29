<?php

class Sucursal extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//GET para sucursal
    function getSucursal() {
        $query = $this->db->get('sucursal');
        return $query->result_array();
    }

//GET por id para sucursal
    function getSucursalById($idSucursal) {
        $this->db->where('idsucursal', $idSucursal);
        $query = $this->db->get('sucursal');
        return $query->row();
    }

//POST para sucursal
    function postSucursal($idsucursal, $nombreSucursal) {
        $data = array(
            'idsucursal' => $idsucursal,
            'nombreSucursal' => $nombreSucursal
        );
        return $this->db->insert('sucursal', $data);
    }

//PUT para sucursal
    function putSucursal($idsucursal, $nombreSucursal) {
        $data = array(
            'idsucursal' => $idsucursal,
            'nombreSucursal' => $nombreSucursal
        );
        
        $this->db->where('idsucursal', $idsucursal);
        return $this->db->update('sucursal', $data);
        
//        $this->title   = $_POST['title'];
//        $this->content = $_POST['content'];
//        $this->date    = time();
//
//        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

 //DELETE para sucursal
    function eliminarSucursal($idsucursal) {
        $this->db->where('idsucursal', $idsucursal);
        return $this->db->delete('sucursal');
    }
    
    
    
}
