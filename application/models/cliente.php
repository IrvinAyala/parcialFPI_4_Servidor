<?php

class Cliente extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

function getCliente(){
  $query = $this->db->get('cliente');
  return $query->result_array();
}
function getClienteById($idCliente){
  $this->db->where('id_cliente', $idCliente);
  $query = $this->db->get('cliente');
  return $query->row();
}

}
