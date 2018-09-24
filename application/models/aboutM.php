<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
  
class aboutM extends CI_Model {


// public function_construct()
// {
// 	parent::__construct();
// }


public function getabout()
{
	$data = $this->db->get('about');
	return $data->row();
}

public function GetbyID($aboutid)
{
	$data = $this->db->query("SELECT * FROM about where aboutid='$aboutid'");
	$hasil= $data->row_array();
	return $hasil;
}

public function delete($aboutid)
	{
	$this->db->where('aboutid', $aboutid);
	 $this->db->delete('about');
	}




public function getab()
{
	$data = $this->db->get('about');
	return $data->result_array();
}

public function InsertData()
{
	$data = array(
	'isi' => $this->input->post('isi'));
	$this->db->insert('about', $data);
		
}

public function UpdateData($aboutid,$data){
	$this->db->where('aboutid', $aboutid);
	$this->db->update('about', $data);

	
}


}