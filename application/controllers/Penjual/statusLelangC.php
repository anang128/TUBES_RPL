<?php

class statusLelangC extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('LeBabeModel');
	}
	
    public function index()
	{
		// Melakukan cek user yang sedang login berdasarkan session username saat login
		$acc = $this->LeBabeModel->getUser($_SESSION['username']);

		// Mendefinisikan $data pada view status lelang untuk menampilkan barang yang dijual user itu sendiri
		if($acc)
		{
			$data = $this->LeBabeModel->showDataPenjualan($acc['id']);
			// Melakukan pemanggilan fungsi deadlineLelang
			$this->deadlineLelang($acc['id']);
			$this->load->view('statusLelangV', ['data'=>$data]);
		}
    }

	public function deadlineLelang($id)
	{
		// Melakukan load showDataPenjualan dari model
		$barang = $this->LeBabeModel->showDataPenjualan($id);
		// Melakukan perulangan untuk mengambil data dari database
		foreach ($barang as $b)
		{
			// Melakukan pengecekan dan membandingkan tanggal (lokal) dan tanggal deadline lelang
			// Apabila tanggal > tanggal deadline dan harga akhir > harga barang, maka
			if ((date("Y-m-d") > $b['deadline']) && ($b['hargaAkhir'] > $b['hargaBarang']))
			{
				// status lelang diReplace menjadi sukses
				$this->db->set('statusLelang', "Success");
				$this->db->where('idBarang', $b['idBarang']);
				$this->db->update('barang');
			} else if ((date("Y-m-d") > $b['deadline']) && ($b['hargaAkhir'] == $b['hargaBarang'])) // Apabila tanggal > tanggal deadline dan harga akhir = harga barang, maka
			{
				// Status lelang diReplace menjadi Failed
				$this->db->set('statusLelang', "Failed");
				$this->db->where('idBarang', $b['idBarang']);
				$this->db->update('barang');
			}
		}
	}
}
?>
