<?php

class ControllerBidBarang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LeBabeModel');
	}

	public function addBid($idBarang)
	{
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('nominalBid','nominalBid','required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('pembeliV');
		} else
		{
			$barang = $this->db->get_where('barang', ['idBarang' => $idBarang])->row_array();
			if ($barang['hargaAkhir'] < $this->input->post('nominalBid', true))
			{
				$data = [
					"idPembeli" => $user['id'],
					"idBarang" => $idBarang,
					"idUser" => $user['id'],
					"namaPembeli" => $user['username'],
					"nominalBid" => $this->input->post('nominalBid', true)
				];
				$this->LeBabeModel->insertData('pembeli', $data);
				$dataBid = [
					'idBarang' => $idBarang,
					'nominalBid' => $this->input->post('nominalBid', true)
				];
				$this->LeBabeModel->updateBid($dataBid);
			}
		}
		redirect('Pembeli/ControllerDashboardPembeli');
	}
}

?>
