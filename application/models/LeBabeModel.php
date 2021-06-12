<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeBabeModel extends CI_model
{
    public function getData($table){
		return $this->db->get($table);
	}

    public function insertData($table, $data){
		$this->db->insert($table, $data);
	}

    public function updateData($table,$data,$where){
		$this->db->update($table,$data,$where);
	}

    public function deleteData($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function showDataPenjualan($id)
	{
		$this->db->select('namaBarang');
		$this->db->select('descBarang');
		$this->db->select('hargaBarang');
		$this->db->select('hargaAkhir');
		$this->db->select('statusBarang');
		$this->db->select('statusLelang');
		$this->db->select('gambar');
		$this->db->from('barang');
		$this->db->where('idUser', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getBarang()
	{
		$this->db->select('idBarang');
		$this->db->select('gambar');
		$this->db->select('namaBarang');
		$this->db->select('hargaBarang');
		$this->db->select('hargaAkhir');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getUser($username)
	{
		return $this->db->get_where('user', ['username' => $username])->row_array();
	}
}

?>
