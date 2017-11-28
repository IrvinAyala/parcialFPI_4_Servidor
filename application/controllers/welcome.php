<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

//GET para sucursal
	public function getsucursal(){
		$this->load->model('sucursal');
		$data = $this->sucursal->getSucursal();
		header('Content-Type: application/json');
		echo json_encode($data);
	}
	public function getsucursalbyid($idSucursal){
		$this->load->model('sucursal');
		$data = $this->sucursal->getSucursalById($idSucursal);
		header('Content-Type: application/json');
		echo json_encode($data);
	}

//GET para cliente
public function getcliente(){
	$this->load->model('cliente');
	$data = $this->cliente->getCliente();
	header('Content-Type: application/json');
	echo json_encode($data);
}
public function getclientebyid($idCliente){
	$this->load->model('cliente');
	$data = $this->cliente->getClienteById($idCliente);
	header('Content-Type: application/json');
	echo json_encode($data);
}

//GET para pago
public function getpago(){
	$this->load->model('pago');
	$data = $this->pago->getPago();
	header('Content-Type: application/json');
	echo json_encode($data);
}
public function getpagobyid($idPago){
	$this->load->model('pago');
	$data = $this->pago->getPagoById($idPago);
	header('Content-Type: application/json');
	echo json_encode($data);
}

//GET para empleado
public function getempleado(){
	$this->load->model('empleado');
	$data = $this->empleado->getEmpleado();
	header('Content-Type: application/json');
	echo json_encode($data);
}
public function getempleadobyid($idEmpleado){
	$this->load->model('empleado');
	$data = $this->empleado->getEmpleadoById($idEmpleado);
	header('Content-Type: application/json');
	echo json_encode($data);
}

//GET para tipo_pago
public function gettipopago(){
	$this->load->model('tipo_pago');
	$data = $this->tipo_pago->getTipoPago();
	header('Content-Type: application/json');
	echo json_encode($data);
}
public function gettipopagobyid($idTipoPago){
	$this->load->model('tipo_pago');
	$data = $this->tipo_pago->getTipoPagoById($idTipoPago);
	header('Content-Type: application/json');
	echo json_encode($data);
}





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
