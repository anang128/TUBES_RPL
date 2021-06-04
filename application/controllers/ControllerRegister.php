<?php
	
class Register extends CI_Controller
{
    public function index()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
            "no_telp" => $this->input->post('no_telp', true),
            "alamat" => $this->input->post('alamat', true),
        ];
        $this->LeBabeModel->insertData($data, 'user');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Berhasil Register, Silahkan Login!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
		redirect('login');
    }
}

?>