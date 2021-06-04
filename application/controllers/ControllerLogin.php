<?php

class login extends CI_Controller
{
    public function login()
    {
        $username = $this->input->post('username');
		$password = md5($this->input->post('password'));
        $validasi = $this->LeBabeModel->loginValidation($username, $password);

        if($validasi==FALSE)
        {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username atau Password salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>');
          redirect('LoginView');
        } else
        {
            redirect('DashboardV')
        }
    }

    public function logout()
    {
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>