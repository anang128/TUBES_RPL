<?php
	
class ControllerRegister extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LeBabeModel');
	}

    public function index()
    {
		// Mendefinisikan form validasi inputan user (sesuai form yang ada pada view)
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('no_telp','no_telp','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');

		// Mengecek apabila form register tidak tampil, maka yang dilakukan adalah load View register
		// dan jika tampil, maka user dapat melakukan registerasi
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('regisV');
		} else 
		{
			// Menyimpan inputan user ke dalam array asosiatif sebelum dimasukkan ke database
			$data = [
				"username" => $this->input->post('username', true),
				"password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				"nama" => $this->input->post('nama', true),
				"email" => $this->input->post('email', true),
				"no_telp" => $this->input->post('no_telp', true),
				"alamat" => $this->input->post('alamat', true),
				"saldo" => 0,
			];
			// Memasukkan value yang ada pada array ke dalam database
			$this->LeBabeModel->insertData('user', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Berhasil Register, Silahkan Login!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('ControllerLogin');
		}
    }
}

?>
