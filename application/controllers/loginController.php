<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class LoginController extends CI_Controller {
    
    public function index() {
        $this->load->view('empleado_message');
    }

    function evaluarlogin() {

        $id_empleado = $this->input->post('id_empleado');
        $pass_empleado = $this->input->post('pass_empleado');

        $this->load->model('empleado');
        $data->empleado->evaluarLogin($id_empleado, $pass_empleado);
        header('Content-Type: application/json');
        echo json_encode($data);

    }

}
