<?php

class ControllerBarang extends CI_Controller
{
	public function __construct()
	{
		// Melakukan load model yang dibangun (LeBabeModel)
		parent::__construct();
		$this->load->model('LeBabeModel');
	}

    public function addBarang()
    {
		// Melakukan cek user yang sedang login berdasarkan session username saat login
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		// Mendefinisikan form validasi inputan user (sesuai form yang ada pada view)
		$this->form_validation->set_rules('namaBarang','namaBarang','required');
		$this->form_validation->set_rules('statusBarang','statusBarang','required');
		$this->form_validation->set_rules('descBarang','descBarang','required');
		$this->form_validation->set_rules('hargaBarang','hargaBarang','required');
		$this->form_validation->set_rules('deadline','deadline','required');

		// Mengecek apabila form jual barang tidak tampil, maka yang dilakukan adalah load View jual barang
		// dan jika tampil, maka
        if($this->form_validation->run() == FALSE)
		{
			$this->load->view('jualBarangV');
		} else
		{
			// Menyiapkan variable untuk menampung gambar barang
			$upload_image = $_FILES['gambar']['name'];
			// Melakukan pengecekan rules gambar barang yang bisa ditambahkan
			if ($upload_image)
			{
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '10000';
				$config['upload_path'] = './assets/img/';

				// Melakukan load library untuk upload gambar
				$this->load->library('upload', $config);

				// Melakukan pengecekan apabila gambar sesuai rules, maka
				if ($this->upload->do_upload('gambar'))
				{
					// Gambar akan diupload ke tabel barang kolom gambar
					$image = $this->upload->data('file_name');
					$this->db->set('gambar', $image);
				} else 
				{
					// Jika tidak sesuai, maka muncul display error
					echo $this->upload->display_errors();
				}
				// Menyiapkan variable untuk menampung proses sebelumnya
				$gambar = $upload_image;
			}

			// Melakukan input data barang, dan inputan disimpan ke array sebelum dimasukkan ke database
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

			// Melakukan load insert data dari model
			$this->LeBabeModel->insertData('barang', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Barang berhasil ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('Penjual/jualBarangC');
		}
    }

    public function hapusBarang($idBarang)
    {
		// Mendapatkan semua data yang ada pada tabel barang sesuai id barang
		$barang = $this->db->get_where('barang', ['idBarang' => $idBarang])->row_array();
		// Menyimpan id barang, untuk melakukan hapus barang berdasarkan id barang
        $idBarang = $barang['idBarang'];
		// Melakukan load deleteBarang dari model
        $this->LeBabeModel->deleteBarang($idBarang);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
		Barang berhasil dihapus
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>');
        redirect('Penjual/statusLelangC');
    }
}

?>
