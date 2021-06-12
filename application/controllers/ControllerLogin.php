<?php

class ControllerLogin extends CI_Controller
{

    public function index()
    {
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');

      if($this->form_validation->run() == FALSE)
      {
				$this->load->view('loginV');
        
      } else
      {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$user = $this->db->get_where('user', ['username' => $username])->row_array();
				if($user)
				{
					if(password_verify($password, $user['password']))
					{
						$data['username'] = $user['username'];
						$this->session->set_userdata($data);
						redirect('Pembeli/ControllerDashboardPembeli');
					} else
					{
						$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        		Username atau Password salah!
        		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		</div>');
						redirect('ControllerLogin');
					}
				} else 
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
		$this->session->sess_destroy();
		redirect('ControllerLogin');
	}
}

?>
