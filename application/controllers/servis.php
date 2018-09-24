<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class servis extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->model('servisM');
}


public function index()
	{
	  
	      
		
		$data= array('servis' =>$this->servisM->getservis(),
					'judul'=>'G' );  
		$this->load->view('header');
		$this->load->view('servisid/index',$data);
		$this->load->view('footer');
   }
    
	
	public function Tambah()
	{

		$this->load->view('header');
		$this->load->view('servis/tambah');
		$this->load->view('footer');
	}

	public function Insert()
	{
		
				$this->servisM->InsertData();

				redirect ('servis');
			}
	

	public function delete($servisid)
	{

		$this->servisM->delete($servisid);
 		$this->index();
	}

	public function getID($servisid)
	{
	
	$data['about'] = $this->servisM->GetbyID($servisid);
	$this->load->view('servis/edit',$data);
	}
	

	function Update()
	{
	$id= $this->input->post('id');
	$isi=$this->input->post('isi');
	$data = array('isi' => $this->input->post('isi'));
	$this->servisM->UpdateData($id,$data);
	$this->index();
	}

}