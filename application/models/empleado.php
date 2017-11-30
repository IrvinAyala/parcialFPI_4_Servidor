<?php

class Empleado extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

function getEmpleado(){
  $query = $this->db->get('empleado');
  return $query->result_array();
}

function getEmpleadoById($idEmpleado){
  $this->db->where('id_empleado', $idEmpleado);
  $query = $this->db->get('empleado');
  return $query->row();
}
function getEmpleadoByIdSucursal($idSucursal){
  $this->db->where('id_sucursal', $idSucursal);
  $query = $this->db->get('empleado');
  return $query->result_array();
}

}
