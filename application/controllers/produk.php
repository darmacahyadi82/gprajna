<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class produk extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->model('produkM');
	$this->load->model('jenisM');
}


public function index()
	{
	  
	      
		
		$data= array('prod' =>$this->produkM->getproduk(),
					'judul'=>'G' );  
		$this->load->view('header');
		$this->load->view('produk/index',$data);
		$this->load->view('footer');
   }
    
	
	public function Tambah()
	{

		$data= array('jenis' => $this->jenisM->getjeniss());
		$this->load->view('header');
		$this->load->view('produk/tambah',$data);
		$this->load->view('footer');
	}

	public function Insert()
	{
		
				$this->produkM->InsertData();

				redirect ('produk');
			}
	

	public function delete($idproduk)
	{

		$this->produkM->delete($idproduk);
 		$this->index();
	}

	public function getID($idproduk)
	{
	
	$data['about'] = $this->produkM->GetbyID($idproduk);
	$this->load->view('produk/edit',$data);
	}
	

	function Update()
	{
	$id= $this->input->post('id');
	$isi=$this->input->post('isi');
	$data = array('isi' => $this->input->post('isi'));
	$this->produkM->UpdateData($id,$data);
	$this->index();
	}

}