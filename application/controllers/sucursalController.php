<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SucursalController extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('sucursalController_message');
    }

//GET para sucursal
    public function getsucursal() {
        $this->load->model('sucursal');
        $data = $this->sucursal->getSucursal();
        header('Content-Type: application/json');
        echo json_encode($data);
    }

//GET por id para sucursal
    public function getsucursalbyid($idSucursal) {
        $this->load->model('sucursal');
        $data = $this->sucursal->getSucursalById($idSucursal);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

//POST para sucursal
    function postsucursal() {
        $idsucursal = $this->input->post('idsucursal');
        $nombreSucursal = $this->input->post('nombreSucursal');

        $this->load->model('sucursal');
        $this->sucursal->postSucursal($idsucursal, $nombreSucursal);

    }

    
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
