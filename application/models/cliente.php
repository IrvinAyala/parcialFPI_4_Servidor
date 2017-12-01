<?php

class Cliente extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//GET para cliente
    function getCliente() {
        $query = $this->db->get('cliente');
        return $query->result_array();
    }

//GET por id para cliente
    function getClienteById($idCliente) {
        $this->db->where('id_cliente', $idCliente);
        $query = $this->db->get('cliente');
        return $query->row();
    }

//POST para cliente
    function postCliente($id_cliente, $nombre_cliente, $genero_cliente, $activo_cliente, $id_sucursalcliente) {
        $data = array(
            'id_cliente' => $id_cliente,
            'nombre_cliente' => $nombre_cliente,
            'genero_cliente' => $genero_cliente,
            'activo_cliente' => $activo_cliente,
            'id_sucursalcliente' => $id_sucursalcliente
        );
        return $this->db->insert('cliente', $data);
    }

//PUT para cliente
    function putCliente($id_cliente, $activo_cliente) {
        $data = array(
            'id_cliente' => $id_cliente,
//            'nombre_cliente' => $nombre_cliente,
//            'genero_cliente' => $genero_cliente,
            'activo_cliente' => $activo_cliente,
//            'id_sucursalcliente' => $id_sucursalcliente
        );

        $this->db->where('id_cliente', $id_cliente);
        return $this->db->update('cliente', $data);

//        $this->title   = $_POST['title'];
//        $this->content = $_POST['content'];
//        $this->date    = time();
//
//        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    //DELETE para cliente
    function  deleteCliente($id_cliente) {
        $this->db->where('id_cliente', $id_cliente);
        return $this->db->delete('cliente');
    }

}
