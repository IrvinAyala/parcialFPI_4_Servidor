<?php

class Sucursal extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

function getSucursal(){
  $query = $this->db->get('sucursal');
  return $query->result_array();
}
function getSucursalById($idSucursal){
  $this->db->where('idsucursal', $idSucursal);
  $query = $this->db->get('sucursal');
  return $query->row();
}

}
