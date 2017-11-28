<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursal_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($idsucursal = null)
    {
        if (!is_null($idsucursal)) {
            $query = $this->db->select('*')->from('sucursal')->where('idsucursal', $idsucursal)->get();
            if ($query->num_rows() === 1) {
                return $query->row_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('sucursal')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }

    public function save($sucur)
    {
        $this->db->set($this->_setCity($sucur))->insert('sucursal');

        if ($this->db->affected_rows() === 1) {
            return $this->db->insert_id();
        }

        return null;
    }

    public function update($sucur)
    {
        $idsucursal = $sucur['idsucursal'];

        $this->db->set($this->_setCity($sucur))->where('idsucursal', $idsucursal)->update('sucursal');

        if ($this->db->affected_rows() === 1) {
            return true;
        }

        return null;
    }

    public function delete($idsucursal)
    {
        $this->db->where('idsucursal', $idsucursal)->delete('sucursal');

        if ($this->db->affected_rows() === 1) {
            return true;
        }

        return null;
    }

    private function _setCity($sucur)
    {
        return array(
            'idsucursal' => $sucur['idsucursal'],
            'nombreSucursal' => $sucur['nombreSucursal']
        );
    }
}
