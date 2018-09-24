<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
  
class produkM extends CI_Model {


// public function_construct()
// {
// 	parent::__construct();
// }


public function getproduk()
{
	$data = $this->db->get('produk');
	return $data->result();
}

public function GetbyID($idproduk)
{
	$data = $this->db->query("SELECT * FROM produk where idproduk='$idproduk'");
	$hasil= $data->row_array();
	return $hasil;
}

public function delete($idproduk)
	{
	$this->db->where('idproduk', $idproduk);
	 $this->db->delete('produk');
	}




public function getproduks()
{
	$data = $this->db->get('produk');
	return $data->result_array();
}

public function InsertData()
{

	$idproduk = '54644658';
	$data = array(
	'idproduk' => $idproduk,
	'idjenis' => $this->input->post('idjenis'),
	'nama_produk' => $this->input->post('nama_produk'),
	'tema' => $this->input->post('tema'),
	'jenis_kertas' => $this->input->post('jenis_kertas'),
	'penjelasan' => $this->input->post('penjelasan'),
	'tgl' => $this->input->post('tgl'),
	'gambar' => $this->input->post('gambar'));
	$this->db->insert('produk', $data);
		
}

public function UpdateData($id,$data){
	$this->db->where('idproduk', $id);
	$this->db->update('produk', $data);
}


}