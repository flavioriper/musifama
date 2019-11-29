<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Votacao extends CI_Controller {

	public function __construct() {
    parent::__construct();
    $this->load->model('main_model');
  }

  public function votar() {
    date_default_timezone_set('America/Sao_Paulo');
    if ($this->input->post('candidato')) {
      $id = $this->input->post('candidato');
      $voto = array(
        'candidato_id' => $id,
        'data_voto' => date('Y-m-d H:i:s'),
        'ip' => '123.123.123'
      );
      if ($this->main_model->cadastrarVoto($voto)) {
        echo '200';
      } else {
        echo '500';
      }
    }
  }
}
