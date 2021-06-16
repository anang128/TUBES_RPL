<?php

class ControllerLogin extends CI_Controller
{

    public function index()
    {
		// Mendefinisikan form validasi inputan user (sesuai form yang ada pada view)
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');

		// Mengecek apabila form login tidak tampil, maka yang dilakukan adalah load View login
		// dan jika tampil, maka user dapat melakukan login
    	if($this->form_validation->run() == FALSE)
      	{
			$this->load->view('loginV');
        } else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// Menyocokkan inputan username dengan data yang ada pada database di tabel user
			$user = $this->db->get_where('user', ['username' => $username])->row_array();

			// Melakukan pengecekan, jika inputan username ada pada database, maka
			if($user)
			{
				// Melalukakan pengecekan password inputan user dengan password yang ada pada database di tabel user
				// jika sama, maka
				if(password_verify($password, $user['password']))
				{
					// id dan username disimpan ke dalam session
					$data = [
						'id' => $user['id'],
						'username' => $user['username']
					];
					$this->session->set_userdata($data);
					redirect('Pembeli/ControllerDashboardPembeli');
				} else // jika password tidak sama, maka akan tampil pesan 'Username atau Password salah!'
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Username atau Password salah!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>');
					redirect('ControllerLogin');
				}
			} else // jika username tidak sama, maka akan tampil pesan 'Username atau Password salah!'
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Username atau Password salah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
				redirect('ControllerLogin');
			}
		}
    }

    public function logout()
    {
		// Menghapus session saat melakukan login
		$this->session->sess_destroy();
		redirect('ControllerLogin');
	}
}

?>
