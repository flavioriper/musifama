<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct() {
    parent::__construct();
    $this->load->model('main_model');
    }

	public function index() {
		$data['localPath'] = 'front/index/';

		$this->load->view('front/template/header', $data);
		$this->load->view($data['localPath'].'html');
		$this->load->view('front/template/footer');
  }
  
  public function inscricao() {
    $data['localPath'] = 'front/inscricao/';

    $this->load->view('front/template/header', $data);
		$this->load->view($data['localPath'].'html');
		$this->load->view('front/template/footer');
  }

  public function inscrever() {
    date_default_timezone_set('America/Sao_Paulo');

    if ($this->input->post('inscricao')) {
      $candidato = json_decode($this->input->post('inscricao'));
      $candidatoDto = array(
        'candidato_nome' => $candidato->candidato_nome,
        'candidato_nome_artistico' => $candidato->candidato_nome_artistico,
        'candidato_email' => $candidato->candidato_email,
        'candidato_telefone' => $candidato->candidato_telefone,
        'candidato_idade' => $candidato->candidato_idade,
        'candidato_categoria' => $candidato->candidato_categoria,
        'candidato_estilo_musical' => $candidato->candidato_estilo_musical,
        'candidato_cidade' => $candidato->candidato_cidade,
        'candidato_estado' => $candidato->candidato_estado,
        'candidato_cep' => $candidato->candidato_cep,
        'candidato_senha' => $this->encryption->encrypt($candidato->candidato_senha),
        'responsavel_nome' => $candidato->responsavel_nome,
        'responsavel_email' => $candidato->responsavel_email,
        'responsavel_cep' => $candidato->responsavel_cep,
        'data_cadastro' => date('Y-m-d H:i:s')
      );

      if ($this->main_model->verificarEmail($candidatoDto['candidato_email'])) {
        echo '220';
        exit;
      }

      if ($this->main_model->cadastrarCandidato($candidatoDto)) {
        echo '200';
      }
    }
  }
}
