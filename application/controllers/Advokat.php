<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Advokat extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_advokat');
	}
	

	public function index()
	{
		$data = array(
			'title' => 'Fra & Co. Law Firm',
			'title2' => 'Data Advokat',
			'advokat' => $this->m_advokat->lists(),
 			'isi' => 'admin/advokat/v_list'
		);
			$this->load->view('admin/layout/v_wrapper',$data,FALSE);
		}

	public function add()
	{
		//$this->form_validation->set_rules('nama_advokat', 'Nama Advokat', 'required');
		//$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		//$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		//$this->form_validation->set_rules('Foto_advokat', 'Foto Advokat', 'required');

		
		//if ($this->form_validation->run() == TRUE) {
			//$config['upload_path']= './foto_advokat/';
			//$config['allow_types']=    'jpg|png';
			//$config['max_size']=    '2000';
			//$this->upload->initialize($config);
			//if ( ! $this)
		//} else {
			# code...
		//}
		


		$data = array(
			'title' => 'Fra & Co. Law Firm',
			'title2' => 'Add Data Advokat',
 			'isi' => 'admin/advokat/v_add'
		);
			$this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}


}

