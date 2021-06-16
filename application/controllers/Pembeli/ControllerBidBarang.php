<?php

class ControllerBidBarang extends CI_Controller
{
	public function __construct()
	{
		// Melakukan load model yang dibangun (LeBabeModel)
		parent::__construct();
		$this->load->model('LeBabeModel');
	}

	public function addBid($idBarang)
	{
		// Melakukan cek user yang sedang login berdasarkan session username saat login
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		// Mendefinisikan form validasi inputan user (sesuai form yang ada pada view)
		$this->form_validation->set_rules('nominalBid','nominalBid','required');

		// Mengecek apabila form bid barang tidak tampil, maka yang dilakukan adalah load View bid barang
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('pembeliV');
		} else // dan jika tampil, maka
		{
			// Mengecek apabila value harga akhir pada database lebih kecil daripada inputan bid pembeli, maka berhasil melakukan bid
			$barang = $this->db->get_where('barang', ['idBarang' => $idBarang])->row_array();
			if ($barang['hargaAkhir'] < $this->input->post('nominalBid', true))
			{
				// Menyimpan data ke dalam array asosiatif sebelum dimasukkan ke database
				$data = [
					"idPembeli" => $user['id'],
					"idBarang" => $idBarang,
					"idUser" => $user['id'],
					"namaPembeli" => $user['username'],
					"namaBarang" => $barang['namaBarang'],
					"nominalBid" => $this->input->post('nominalBid', true),
					"statusBid" => "Pending"
				];
				// Memasukkan data dalam array ke database tabel pembeli
				$this->LeBabeModel->insertData('pembeli', $data);
				// Menyimpan data id barang dan nominal bid ke dalam array asosiatif untuk meReplace harga akhir dengan nominal bid
				$dataBid = [
					'idBarang' => $idBarang,
					'nominalBid' => $this->input->post('nominalBid', true)
				];
				// MeReplace harga akhir dengan nominal bid berdasarkan id barang
				$this->LeBabeModel->updateBid($dataBid);
			}
		}
		redirect('Pembeli/ControllerDashboardPembeli');
	}
}

?>
