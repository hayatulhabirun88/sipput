<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
	}
	public function index()
	{
		$data = array(
			'title' => 'Beranda',
			'jumlah_pemilih' => $this->user_model->jumlah_data_pemilih()
		);
		$this->load->view('home',$data);
	}
}
