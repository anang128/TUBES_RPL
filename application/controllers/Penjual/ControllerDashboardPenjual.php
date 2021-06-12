<?php 

Class ControllerDashboardPenjual extends CI_Controller{
	public function index()
	{
		$this->load->view('penjualV');
	}

	public function profile()
	{
		$this->load->view('profileV');
	}

	public function saldo(){
        $this->load->view('saldoV');
    }
}

?>
