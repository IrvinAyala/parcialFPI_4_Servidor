<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipo_pagoController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}


//GET para tipo_pago
public function gettipopago(){
	$this->load->model('tipo_pago');
	$data = $this->tipo_pago->getTipoPago();
	header('Content-Type: application/json');
	echo json_encode($data);
}

//GET por id para tipo_pago
public function gettipopagobyid($idTipoPago){
	$this->load->model('tipo_pago');
	$data = $this->tipo_pago->getTipoPagoById($idTipoPago);
	header('Content-Type: application/json');
	echo json_encode($data);
}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

