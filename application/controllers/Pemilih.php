<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
	}
	public function index()
	{
		$data = array(
			'title' => 'Pemilih',
			'pemilih' => $this->user_model->ambil_data_pemilih()->result(),
		);
		$this->load->view('pemilih',$data);
	}
}
