<?php 

Class ControllerDashboardPembeli extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LeBabeModel');
	}
	
    public function index(){
		$acc = $this->LeBabeModel->getUser($_SESSION['username']);
		$data = [
			"barang" => $this->LeBabeModel->getBarang(),
			"acc" => $this->LeBabeModel->showDataPenjualan($acc['id'])
		];
		$this->load->view('pembeliV', $data);
    }
}

?>
