<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';

class Sucursal extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sucursal_model');
    }

    public function index_get()
    {
        $sucursal = $this->sucursal_model->get();

        if (!is_null($sucursal)) {
            $this->response(array('response' => $sucursal), 200);
        } else {
            $this->response(array('error' => 'No hay sucursales en la base de datos...'), 404);
        }
    }

    public function find_get($idsucursal)
    {
        if (!$idsucursal) {
            $this->response(null, 400);
        }
        $sucur = $this->sucursal_model->get($idsucursal);

        if (!is_null($sucur)) {
            $this->response(array('response' => $sucur), 200);
        } else {
            $this->response(array('error' => 'Sucursal no encontrada...'), 404);
        }
    }

    public function index_post()
    {
        if (!$this->post('sucur')) {
            $this->response(null, 400);
        }

        $idsucursal = $this->sucursal_model->save($this->post('sucur'));

        if (!is_null($idsucursal)) {
            $this->response(array('response' => $idsucursal), 200);
        } else {
            $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
        }
    }

    public function index_put()
    {
        if (!$this->put('sucur')) {
            $this->response(null, 400);
        }

        $update = $this->sucursal_model->update($this->put('sucur'));

        if (!is_null($update)) {
            $this->response(array('response' => 'Sucursal actualizada!'), 200);
        } else {
            $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
        }
    }

    public function index_delete($idsucursal)
    {
        if (!$idsucursal) {
            $this->response(null, 400);
        }

        $delete = $this->sucursal_model->delete($idsucursal);

        if (!is_null($delete)) {
            $this->response(array('response' => 'Sucursal eliminada!'), 200);
        } else {
            $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
        }
    }
}



