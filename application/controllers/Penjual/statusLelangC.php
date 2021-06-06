<?php

class statusLelangC extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('LeBabeModel');
	}
	
    public function index(){
		$acc = $this->LeBabeModel->getUser($_SESSION['username']);
		if($acc)
		{
			$data = $this->LeBabeModel->showDataPenjualan($acc['id']);
			$this->load->view('statusLelangV', ['data'=>$data]);
		}
    }
}
?>
