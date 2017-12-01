<?php

class Pago extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//GET para pago
    function getPago() {
        $query = $this->db->get('pago');
        return $query->result_array();
    }

//GET por id para pago
    function getPagoById($idPago) {
        $this->db->where('idpago', $idPago);
        $query = $this->db->get('pago');
        return $query->row();
    }

//GET por id de cliente
function getPagoByIdCliente($idcliente) {
  $this->db->where('idcliente', $idcliente);
    $query = $this->db->get('pago');
    return $query->result_array();
}
//POST para pago
    function postPago($idpago, $idcliente, $idTipoPago, $fecha) {
        $data = array(
            'idpago' => $idpago,
            'idcliente' => $idcliente,
            'idTipoPago' => $idTipoPago,
            'fecha' => $fecha
        );
        return $this->db->insert('pago', $data);
    }

//PUT para pago
    function putPago($idpago, $idcliente, $idTipoPago, $fecha) {
        $data = array(
            'idpago' => $idpago,
            'idcliente' => $idcliente,
            'idTipoPago' => $idTipoPago,
            'fecha' => $fecha
        );

        $this->db->where('idpago', $idpago);
        return $this->db->update('pago', $data);

//        $this->title   = $_POST['title'];
//        $this->content = $_POST['content'];
//        $this->date    = time();
//
//        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    //DELETE para pago
    function  deletePago($idpago) {
        $this->db->where('idpago', $idpago);
        return $this->db->delete('pago');
    }

}


//NO FUNCIONA PUT NI DELETE
