<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->model('aboutM');
}


public function index()
	{
	  
	    $this->load->model('aboutM');
		$data= array('ten' =>$this->aboutM->getab(),
					'judul'=>'G' );  
		$this->load->view('header');
		$this->load->view('about/index',$data);
		$this->load->view('footer');
   }
    
	
	public function Tambah()
	{

		$this->load->view('header');
		$this->load->view('about/tambah');
		$this->load->view('footer');
	}

	public function Insert()
	{
		
				$this->aboutM->InsertData();

				redirect ('about');
	}


	public function delete($aboutid)
	{

		$this->aboutM->delete($aboutid);
 		$this->index();
	}

	public function getID($aboutid)
	{
	$this->load->model('aboutM');
	$data['about'] = $this->aboutM->GetbyID($aboutid);
	$this->load->view('about/edit',$data);
	}
	

function Update() {
$aboutid= $this->input->post('aboutid');
$data = array('isi' =>$this->input->post('isi'));
$this->aboutM->UpdateData($aboutid,$data);
$this->index();
}

}