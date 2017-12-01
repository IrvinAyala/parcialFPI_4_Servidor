<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PagoController extends CI_Controller {

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
        $this->load->view('welcome_message');
    }

//GET para pago
    public function getpago() {
        $this->load->model('pago');
        $data = $this->pago->getPago();
        header('Content-Type: application/json');
        echo json_encode($data);
    }

//GET por id para pago
    public function getpagobyid($idpago) {
        $this->load->model('pago');
        $data = $this->pago->getPagoById($idpago);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

//GET por id de cliente
    public function getpagobyidcliente($idcliente) {
        $this->load->model('pago');
        $data = $this->pago->getPagoByIdCliente($idcliente);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

//POST para pago
    function postpago() {
        $idpago = $this->input->post('idpago');
        $idcliente = $this->input->post('idcliente');
        $idTipoPago = $this->input->post('idTipoPago');
        $fecha = $this->input->post('fecha');
        $this->load->model('pago');
        $this->pago->postPago($idpago, $idcliente, $idTipoPago, $fecha);
    }

//PUT para pago
    function putpago() {
       $idpago = $this->input->post('idpago');
        $idcliente = $this->input->post('idcliente');
        $idTipoPago = $this->input->post('idTipoPago');
        $fecha = $this->input->post('fecha');
        $this->load->model('pago');
        $this->pago->putPago($idpago, $idcliente, $idTipoPago, $fecha);
    }

//DELETE para pago
    function  deletepago($idpago) {
        $this->load->model('pago');
        $this->pago->eliminarPago($idpago);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
