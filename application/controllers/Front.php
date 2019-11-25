<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct() {
		parent::__construct();
    }

	public function index() {
		$data['localPath'] = 'front/index/';

		$this->load->view('front/template/header', $data);
		$this->load->view($data['localPath'].'html');
		$this->load->view('front/template/footer');
	}
}
