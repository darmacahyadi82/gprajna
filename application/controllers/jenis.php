<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jenis extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->model('jenisM');
}


public function index()
	{
	  
	    
		$data= array('jenis' =>$this->jenisM->getjeniss(),
					'judul'=>'G' );  
		$this->load->view('header');
		$this->load->view('jenis/index',$data);
		$this->load->view('footer');
   }

   public function test()
	{
	  
	    
		// $data= array('jenis' =>$this->jenisM->getjeniss(),
		// 			'judul'=>'G' );  
		$this->load->view('header');
		$this->load->view('jenis/test');
		$this->load->view('footer');
   }
    
	
	public function Tambah()
	{

		$this->load->view('header');
		$this->load->view('jenis/tambah');
		$this->load->view('footer');
	}

	public function Insert()
	{
		
				$this->jenisM->InsertData();

				redirect ('jenis');
	}


	public function delete($idjenis)
	{

		$this->jenisM->delete($idjenis);
 		$this->index();
	}

	public function getID($idjenis)
	{
	$data['jenis'] = $this->jenisM->GetbyID($idjenis);
	$this->load->view('jenis/edit',$data);
	}
	

function Update() {
$idjenis= $this->input->post('idjenis');
$data = array('nama_jenis' =>$this->input->post('nama_jenis'));
$this->jenisM->UpdateData($idjenis,$data);
$this->index();
}

}