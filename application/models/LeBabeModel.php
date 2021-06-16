<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeBabeModel extends CI_model
{
    public function getData($table)
	{
		return $this->db->get($table);
	}

    public function insertData($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function updateData($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}

    public function deleteBarang($id)
	{
		$this->db->query("DELETE FROM barang WHERE barang.idBarang = $id");
	}

	public function showDataPenjualan($id)
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('idUser', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function showBidPembeli($id)
	{
		$this->db->select('namaBarang');
		$this->db->select('nominalBid');
		$this->db->select('statusBid');
		$this->db->from('pembeli');
		$this->db->where('idPembeli', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getBarang()
	{
		$this->db->select('*');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getUser($username)
	{
		return $this->db->get_where('user', ['username' => $username])->row_array();
	}

	public function updateBid($data)
	{
		// Melakukan update harga akhir barang saat ada user yang melakukan bid
		$id = $data['idBarang'];
		$this->db->set('hargaAkhir', $data['nominalBid']);
		$this->db->where('idBarang', $id);
		$this->db->update('barang');
	}

	public function getprofile($id)
	{
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }

	public function topUpSaldo($id,$jumlah)
	{
		// Melakukan update jumlah saldo saat user melakukan topup saldo, saldo awal + saldo yang
		$this->db->query("UPDATE user SET saldo = saldo + $jumlah WHERE id = $id");
	}
}
?>
