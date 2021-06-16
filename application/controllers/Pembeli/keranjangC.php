<?php

class keranjangC extends CI_Controller
{
    public function __construct()
	{
		// Melakukan load model yang dibangun (LeBabeModel)
		parent::__construct();
		$this->load->model('LeBabeModel');
	}
	
    public function index()
	{
		// Melakukan cek user yang sedang login berdasarkan session username saat login
		$acc = $this->LeBabeModel->getUser($_SESSION['username']);
		if($acc)
		{
			// Menampilan menu bid yang dilakukan oleh user disetiap barang
			$data = $this->LeBabeModel->showBidPembeli($acc['id']);
			$this->load->view('keranjangV', ['data'=>$data]);
		}
    }
}
?>
