<?php

class ControllerBarang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LeBabeModel');
	}

    public function addBarang()
    {
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('namaBarang','namaBarang','required');
		$this->form_validation->set_rules('statusBarang','statusBarang','required');
		$this->form_validation->set_rules('descBarang','descBarang','required');
		$this->form_validation->set_rules('hargaBarang','hargaBarang','required');
		$this->form_validation->set_rules('deadline','deadline','required');

        if($this->form_validation->run() == FALSE)
		{
			$this->load->view('jualBarangV');
		} else
		{
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '10000';
				$config['upload_path'] = './assets/img/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$image = $this->upload->data('file_name');
					$this->db->set('gambar', $image);
				} else {
					echo $this->upload->display_errors();
				}
			$gambar = $upload_image;
			}

			$data = [
				"idUser" => $user['id'],
				"namaBarang" => $this->input->post('namaBarang', true),
				"username" => $user['username'],
				"statusBarang" => $this->input->post('statusBarang', true),
				"descBarang" => $this->input->post('descBarang', true),
				"hargaBarang" => $this->input->post('hargaBarang', true),
				"hargaAkhir" => 0,
				"deadline" => $this->input->post('deadline', true),
				"gambar" => $gambar,
				"statusLelang" => "Pending"
			];

			$this->LeBabeModel->insertData('barang', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Barang berhasil ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('Penjual/jualBarangC');
		}
    }

    public function deleteBarang($id)
    {
        $where = array('idBarang' => $id);
        $this->LeBabeModel->deleteData($where,'barang');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Barang berhasil dihapus
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
        redirect('barangView');
    }
}

?>
