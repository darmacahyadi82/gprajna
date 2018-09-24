<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
  
class jenisM extends CI_Model {


// public function_construct()
// {
// 	parent::__construct();
// }


public function getjenis()
{
	$data = $this->db->get('jenis_produk');
	return $data->result();
}

public function GetbyID($idjenis)
{
	$data = $this->db->query("SELECT * FROM jenis_produk where idjenis='$idjenis'");
	$hasil= $data->row_array();
	return $hasil;
}

public function delete($idjenis)
	{
	$this->db->where('idjenis', $idjenis);
	 $this->db->delete('jenis_produk');
	}




public function getjeniss()
{
	$data = $this->db->get('jenis_produk');
	return $data->result_array();
}

public function InsertData()
{

	$data = array(
	'nama_jenis' => $this->input->post('nama_jenis'));
	$this->db->insert('jenis_produk', $data);
		
}

public function UpdateData($id,$data){
	$this->db->where('idjenis', $id);
	$this->db->update('jenis_produk', $data);
}


}