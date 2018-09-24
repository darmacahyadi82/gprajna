<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
  
class servisM extends CI_Model {


// public function_construct()
// {
// 	parent::__construct();
// }


public function getjasa()
{
	$data = $this->db->get('servis');
	return $data->result();
}

public function GetbyID($servisid)
{
	$data = $this->db->query("SELECT * FROM servis where servisid='$servisid'");
	$hasil= $data->row_array();
	return $hasil;
}

public function delete($servisid)
	{
	$this->db->where('servisid', $servisids);
	 $this->db->delete('servis');
	}




public function getservis()
{
	$data = $this->db->get('servis');
	return $data->result_array();
}

public function InsertData()
{
	$data = array(
	'isi' => $this->input->post('isi'),
	'nama_servis' => $this->input->post('nama_servis'),
	'icon' => $this->input->post('hfjhjhfjk'),
	'gambar' => $this->input->post('gambar'));
	$this->db->insert('servis', $data);
		
}

public function UpdateData($id,$data){
	$this->db->where('servisid', $id);
	$this->db->update('servis', $data);
}


}