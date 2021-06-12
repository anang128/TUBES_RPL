<?php

class statusLelangC extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('LeBabeModel');
	}
	
    public function index()
	{
		$acc = $this->LeBabeModel->getUser($_SESSION['username']);
		if($acc)
		{
			$data = $this->LeBabeModel->showDataPenjualan($acc['id']);
			$this->deadlineLelang($acc['id']);
			$this->load->view('statusLelangV', ['data'=>$data]);
		}
    }

	public function deadlineLelang($id)
	{
		$barang = $this->LeBabeModel->showDataPenjualan($id);
		foreach ($barang as $b)
		{
			if ((date("Y-m-d") > $b['deadline']) && ($b['hargaAkhir'] > $b['hargaBarang']))
			{
				$this->db->set('statusLelang', "Success");
				$this->db->where('idBarang', $b['idBarang']);
				$this->db->update('barang');
			} else if ((date("Y-m-d") > $b['deadline']) && ($b['hargaAkhir'] == $b['hargaBarang']))
			{
				$this->db->set('statusLelang', "Failed");
				$this->db->where('idBarang', $b['idBarang']);
				$this->db->update('barang');
			}
		}
	}
}
?>
