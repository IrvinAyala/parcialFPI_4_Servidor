<?php

class Tipo_pago extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

function getTipoPago(){
  $query = $this->db->get('tipo_pago');
  return $query->result_array();
}
function getTipoPagoById($idTipoPago){
  $this->db->where('idtipo_pago', $idTipoPago);
  $query = $this->db->get('tipo_pago');
  return $query->row();
}

}
