<?php

class Pago extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

function getPago(){
  $query = $this->db->get('pago');
  return $query->result_array();
}
function getPagoById($idPago){
  $this->db->where('idpago', $idPago);
  $query = $this->db->get('pago');
  return $query->row();
}

}
