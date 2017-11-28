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

    
    
}
