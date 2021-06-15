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

	public function profile()
	{
		$acc = $this->LeBabeModel->getUser($_SESSION['username']);
		if($acc)
		{
			$data = $this->LeBabeModel->getProfile($acc['id']);
			$this->load->view('profileV', ['data'=>$data]);
		}
	}
	
	public function editProfile()
	{
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('no_telp','no_telp','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('editProfileV');
		} else 
		{
			$data = [
				"username" => $this->input->post('username', true),
				"password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				"nama" => $this->input->post('nama', true),
				"email" => $this->input->post('email', true),
				"no_telp" => $this->input->post('no_telp', true),
				"alamat" => $this->input->post('alamat', true),
			];
			$where = array(
				'id' => $user['id']);
				$this->LeBabeModel->updateData('user', $data, $where);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Update berhasil
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
				redirect('Pembeli/ControllerDashboardPembeli/profile');
			}
		}
		
		public function saldo()
		{
			$acc = $this->LeBabeModel->getUser($_SESSION['username']);
			if($acc)
			{
				$data = $this->LeBabeModel->getProfile($acc['id']);
				$this->load->view('saldoV', ['data'=>$data]);
			}
		}
		
		public function isiSaldo()
		{
			$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$this->form_validation->set_rules('saldo','saldo','required');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('saldoV');
			} else
			{
				$topup = $this->input->post('saldo', true);
				if($topup <= 0)
				{
					$data['error_message'] = "<b>Gagal</b>Tidak bisa TopUp Kurang dari Rp.0";
				} else
				{
					$this->LeBabeModel->topUpSaldo($user['id'], $topup);
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					Pengisian Saldo Berhasil!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>');
				}
			redirect('Pembeli/ControllerDashboardPembeli/saldo');
			}
		}
	}
?>
