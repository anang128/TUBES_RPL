<?php 

Class ControllerDashboardPembeli extends CI_Controller{
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
		// Mendefinisikan $data pada view Pembeli untuk menampilkan barang yang dijual setiap user (kecuali user yang login)
		$data = [
			"barang" => $this->LeBabeModel->getBarang()
			// "acc" => $this->LeBabeModel->showDataPenjualan($acc['id'])
		];
		$this->load->view('pembeliV', $data);
    }

	public function profile()
	{
		// Melakukan cek user yang sedang login berdasarkan session username saat login
		$acc = $this->LeBabeModel->getUser($_SESSION['username']);
		if($acc)
		{
			// Mendefinisikan $data pada view Profile untuk menampilkan data user yang sedang login
			$data = $this->LeBabeModel->getProfile($acc['id']);
			$this->load->view('profileV', ['data'=>$data]);
		}
	}
	
	public function editProfile()
	{
		// Melakukan cek user yang sedang login berdasarkan session username saat login
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		// Mendefinisikan form validasi inputan user (sesuai form yang ada pada view)
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('no_telp','no_telp','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		
		// Mengecek apabila form edit profile tidak tampil, maka yang dilakukan adalah load View edit profile
		// dan jika tampil, maka
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('editProfileV');
		} else 
		{
			// User bisa langsung input data, dan data inputan disimpan ke dalam array sebelum dimasukkan ke database
			$data = [
				"username" => $this->input->post('username', true),
				"password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				"nama" => $this->input->post('nama', true),
				"email" => $this->input->post('email', true),
				"no_telp" => $this->input->post('no_telp', true),
				"alamat" => $this->input->post('alamat', true),
			];
			// Mendapatkan id user, lalu menimpannya dalam array untuk update data sesuai id user
			$where = array(
				'id' => $user['id']);
			// Memanggil fungsi updateData dari model untuk melakukan update data
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
			// Melakukan cek user yang sedang login berdasarkan session username saat login
			$acc = $this->LeBabeModel->getUser($_SESSION['username']);
			if($acc)
			{
				// Mendefinisikan $data pada view Saldo untuk menampilkan jumlah saldo user
				$data = $this->LeBabeModel->getProfile($acc['id']);
				$this->load->view('saldoV', ['data'=>$data]);
			}
		}
		
		public function isiSaldo()
		{
			// Melakukan cek user yang sedang login berdasarkan session username saat login
			$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

			// Mendefinisikan form validasi inputan user (sesuai form yang ada pada view)
			$this->form_validation->set_rules('saldo','saldo','required');

			// Mengecek apabila form Saldo tidak tampil, maka yang dilakukan adalah load View Saldo
			// dan jika tampil, maka
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('saldoV');
			} else
			{
				// Input jumlah saldo yang ingin ditambahkan
				$topup = $this->input->post('saldo', true);
				// Mengecek apabila inputan kurang dari 0, maka saldo tidak diupdate dan menampilkan pesan gagal
				if($topup <= 0)
				{
					$data['error_message'] = "<b>Gagal</b>Tidak bisa TopUp Kurang dari Rp.0";
				} else // dan jika inputan lebih dari 0, maka saldo yang lama akan diupdate menjadi saldo lama ditambah inputan saldo
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
