<?php

class ControllerBidBarang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LeBabeModel');
	}

	public function addBid()
	{
		$this->form_validation->set_rules('hargaAkhir','hargaAkhir','required');
		$data = ["hargaAkhir" => $this->input->post('hargaAkhir', true),];
		$where = array('namaBarang' => $namaBarang);
		redirect('Pembeli/ControllerDashboardPembeli');
	}
}

?>
