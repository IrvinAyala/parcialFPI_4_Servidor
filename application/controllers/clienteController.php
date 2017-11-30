<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClienteController extends CI_Controller {

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
        $this->load->view('cliente_message');
    }

//GET para cliente
    public function getcliente() {
        $this->load->model('cliente');
        $data = $this->cliente->getCliente();
        header('Content-Type: application/json');
        echo json_encode($data);
    }

//GET por id para cliente
    public function getclientebyid($id_cliente) {
        $this->load->model('cliente');
        $data = $this->cliente->getClienteById($id_cliente);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

//POST para cliente
    function postcliente() {
        $id_cliente = $this->input->post('id_cliente');
        $nombre_cliente = $this->input->post('nombre_cliente');
        $genero_cliente = $this->input->post('genero_cliente');
        $activo_cliente = $this->input->post('activo_cliente');
        $id_sucursalcliente = $this->input->post('id_sucursalcliente');

        $this->load->model('cliente');
        $this->cliente->postCliente($id_cliente, $nombre_cliente, $genero_cliente, $activo_cliente, $id_sucursalcliente);
    }

//PUT para cliente
    function putcliente( $id_cliente) {
//        $id_cliente = $this->input->post('id_cliente');
//        $nombre_cliente = $this->input->post('nombre_cliente');
//        $genero_cliente = $this->input->post('genero_cliente');
        $activo_cliente = $this->input->post('activo_cliente');
//        $id_sucursalcliente = $this->input->post('id_sucursalcliente');

        $this->load->model('cliente');
        $this->cliente->putCliente($id_cliente, $activo_cliente);
    }

//DELETE para cliente
    function deletecliente($id_cliente) {
        $this->load->model('cliente');
        $this->cliente->eliminarCliente($id_cliente);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
