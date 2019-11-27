<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller {

	public function __construct() {
    parent::__construct();
    $this->load->model('main_model');
    }

	public function index() {
    $data['localPath'] = 'front/candidato/gerenciar/';

    if (!$this->checarLogin()) {
      redirecionar('candidato/login#ancor');
    }

    $data['candidato'] = $this->main_model->getCandidato($_SESSION['logado']);
    $data['mensagemImagem'] = $this->session->flashdata('mensagemImagem');
    $data['mensagemMusica'] = $this->session->flashdata('mensagemMusica');

		$this->load->view('front/template_dashboard/header', $data);
		$this->load->view($data['localPath'].'html');
		$this->load->view('front/template_dashboard/footer');
  }

  public function login() {
    $data['localPath'] = 'front/candidato/login/';

    $data['msg'] = $this->session->flashdata('mensagem');

		$this->load->view('front/template_dashboard/header', $data);
		$this->load->view($data['localPath'].'html');
		$this->load->view('front/template_dashboard/footer');
  }

  private function checarLogin() {
    if (isset($_SESSION['logado']) && is_array($_SESSION['logado'])) {
      if ($this->main_model->verificarUsuarioLogado($_SESSION['logado'])) {
        return true;
      }
    }
    return false;
  }

  public function destruirLogado() {
    unset($_SESSION['logado']);
    redirecionar('candidato/login#ancor');
  }

  public function logar() {
    if ($this->input->post('email') && $this->input->post('senha')) {
      $email = $this->input->post('email');
      $senha = $this->input->post('senha');
      $login = $this->main_model->verificaUsuario($email, $senha);
      if ($login) {
        $usuarioSessao = array(
          'candidato_id' => $login->id,
          'token' => random_string('md5', 16)
        );
        $this->session->set_userdata('logado', $usuarioSessao);
        if ($this->main_model->logarUsuario($usuarioSessao)) {
          redirecionar('candidato');
        } else {
          $this->session->set_flashdata('mensagem', 'Aconteceu um erro interno');
          redirecionar('candidato/login#ancor');
        }
      } else {
        $this->session->set_flashdata('mensagem', 'Usuário e/ou senha incorreto(a).');
        redirecionar('candidato/login#ancor');
      }
    } else {
      $this->session->set_flashdata('mensagem', 'Usuário e Senha são obrigatórios');
      redirecionar('candidato/login#ancor');
    }
  }

  public function update() {
    if ($this->input->post('candidato')) {
      if (!$this->checarLogin()) {
        echo '500';
        exit;
      }
      $candidato = json_decode($this->input->post('candidato'));
      $usuario = $this->session->userdata('logado');
      $candidatoDto = array(
        'breve_descricao' => $candidato->breve_descricao
      );
      if ($this->main_model->updateCandidato($usuario['candidato_id'], $candidatoDto)) {
        echo '200';
      } else {
        echo '505';
      }
    }
  }

  public function upload_imagem() {

    if (!$this->checarLogin()) {
      $this->destruirLogado();
    }

    $config['upload_path'] = 'assets/candidato_imagem/';
    $config['allowed_types'] = 'png|jpeg|jpg';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload');
    $this->upload->initialize($config);

    $usuario = $this->session->userdata('logado');

    if ($this->upload->do_upload('candidato-imagem')) {
      date_default_timezone_set('America/Sao_Paulo');

      $file = $this->upload->data();
      $data = array(
          'nome_original' => $file['orig_name'],
          'nome_enc' => $file['file_name'],
          'candidato_id' => $usuario['candidato_id'],
          'data_envio' => date('Y-m-d H:i:s')
      );
      $imagem = $this->main_model->cadastrarImagem($data);
      if ($imagem) {
        $this->main_model->updateCandidato($usuario['candidato_id'], array('imagem_id' => $imagem));
        $this->session->set_flashdata('mensagemImagem', 'Imagem enviada com sucesso');
      } else {
        $this->session->set_flashdata('mensagemImagem', 'Aconteceu um erro no envio da imagem');
      }
      redirecionar('candidato#imagem');
    }
  }

  public function upload_musica() {

    if (!$this->checarLogin()) {
      $this->destruirLogado();
    }

    $config['upload_path'] = 'assets/candidato_musica/';
    $config['allowed_types'] = 'mp3';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload');
    $this->upload->initialize($config);

    $usuario = $this->session->userdata('logado');

    if ($this->upload->do_upload('candidato-musica')) {
      date_default_timezone_set('America/Sao_Paulo');

      $file = $this->upload->data();
      $data = array(
          'nome_original' => $file['orig_name'],
          'nome_enc' => $file['file_name'],
          'candidato_id' => $usuario['candidato_id'],
          'data_envio' => date('Y-m-d H:i:s')
      );
      $musica = $this->main_model->cadastrarMusica($data);
      if ($musica) {
        $this->main_model->updateCandidato($usuario['candidato_id'], array('musica_id' => $musica));
        $this->session->set_flashdata('mensagemMusica', 'Musica enviada com sucesso');
      } else {
        $this->session->set_flashdata('mensagemMusica', 'Aconteceu um erro no envio da música');
      }
      redirecionar('candidato#musica');
    }
  }  
}
