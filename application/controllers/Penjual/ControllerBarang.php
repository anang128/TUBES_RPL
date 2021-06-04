<?php

class BarangController extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->LeBabeModel->getData('barang')->result();
        $this->load->view('barangView', $data);
    }

    public function addBarang()
    {
        $this->load->view('formTambahBarang');
    }

    public function addBarangAct()
    {
        $data = [
            "namaBarang" => $this->input->post('namaBarang', true),
            "statusBarang" => $this->input->post('statusBarang', true),
            "kondisiBarang" => $this->input->post('kondisiBarang', true),
            "hargaAwal" => $this->input->post('hargaAwal', true),
            "kelipatanBid" => $this->input->post('kelipatanBid', true),
            "deadline" => $this->input->post('deadline', true),
        ];
        $this->LeBabeModel->insertData($data, 'barang');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Barang berhasil ditambahkan
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
        redirect('barangView');
    }

    public function updateBarang($id)
    {
        $where = array('idBarang' => $id);
        $data['barang'] = $this->db->query("SELECT * FROM barang WHERE idBarang ='$id'")->result();
        $this->load->view('formEditBarang');
    }

    public function updateBarangAct()
    {
        $data = [
            "namaBarang" => $this->input->post('namaBarang', true),
            "statusBarang" => $this->input->post('statusBarang', true),
            "kondisiBarang" => $this->input->post('kondisiBarang', true),
            "hargaAwal" => $this->input->post('hargaAwal', true),
            "kelipatanBid" => $this->input->post('kelipatanBid', true),
            "deadline" => $this->input->post('deadline', true),
        ];
        $where = array('idBarang' => $id);
        $this->LeBabeModel->updateData('barang', $data,$where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Berhasil memperbaharui data barang
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
        redirect('barangView')
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