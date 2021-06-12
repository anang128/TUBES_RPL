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
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$barang = $this->db->get_where('barang', ['namaBarang' => $this->session->userdata('namaBarang')])->row_array();
		$this->form_validation->set_rules('nominalBid','nominalBid','required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('pembeliV');
		} else
		{
			$data = [
				"idPembeli" => $user['id'],
				"idBarang" => $this->input->post('idBarang', true),
				"idUser" => $user['id'],
				"namaPembeli" => $user['username'],
				"nominalBid" => $this->input->post('nominalBid', true)
			];
			$this->LeBabeModel->insertData('pembeli', $data);
		}
		redirect('Pembeli/ControllerDashboardPembeli');
	}
}

?>
