<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_model {

  public function __construct() {
      parent::__construct();
      $this->load->database();
  }

  /**
   * CREATE
   */
  public function cadastrarCandidato($candidato) {
    return $this->db->insert('candidatos', $candidato);
  }

  public function cadastrarLogin($login) {
    return $this->db->insert('candidatos_login', $login);
  }

  public function cadastrarImagem($imagem) {
    $this->db->where('candidato_id', $imagem['candidato_id']);
    $imagensResult = $this->db->get('candidato_imagem')->result();
    foreach($imagensResult as $imagemResult) {
      $absPath = FCPATH.'/assets/candidato_imagem/'.$imagemResult->nome_enc;
      unset($absPath);
      $this->deletarImagem($imagemResult->id);
    }

    $this->db->insert('candidato_imagem', $imagem);
    if ($this->db->affected_rows() == '1') {
      return $this->db->insert_id();
    }
    return false;
  }

  public function cadastrarMusica($musica) {
    $this->db->where('candidato_id', $musica['candidato_id']);
    $musicasResult = $this->db->get('candidato_musica')->result();
    foreach($musicasResult as $musicaResult) {
      $absPath = FCPATH.'/assets/candidato_musica/'.$musicaResult->nome_enc;
      unset($absPath);
      $this->deletarMusica($musicaResult->id);
    }

    $this->db->insert('candidato_musica', $musica);
    if ($this->db->affected_rows() == '1') {
      return $this->db->insert_id();
    }
    return false;
  }

  /**
   * READ
   */
  public function verificarEmail($email) {
    $this->db->where('candidato_email', $email);
    return $this->db->get('candidatos')->row();
  }

  public function verificarUsuarioLogado($login) {
    $this->db->where('candidato_id', $login['candidato_id']);
    $this->db->where('token', $login['token']);
    return $this->db->get('candidatos_login')->row();
  }

  public function getCandidato($usuario) {
    $this->db->where('c.id', $usuario['candidato_id']);
    $this->db->join('candidato_imagem ci', 'ci.id = c.imagem_id', 'left');
    $this->db->join('candidato_musica cm', 'cm.id = c.musica_id', 'left');
    $this->db->select('c.*, ci.nome_enc as imagem_enc_nome, cm.nome_original as musica_nome, cm.nome_enc as musica_enc_nome');
    return $this->db->get('candidatos c')->row();
  }

  /**
   * UPDATE
   */
  public function updateCandidato($id, $candidato) {
    $this->db->where('id', $id);
    return $this->db->update('candidatos', $candidato);
  }

  /**
   * DELETE
   */
  private function deletarImagem($id) {
    $this->db->where('id', $id);
    return $this->db->delete('candidato_imagem');
  }

  private function deletarMusica($id) {
    $this->db->where('id', $id);
    return $this->db->delete('candidato_musica');
  }

  /**
   * Functions
   */
  public function verificaUsuario($email, $senha) {
    $this->db->where('candidato_email', $email);
    $usuario = $this->db->get('candidatos')->row();
    if ($senha === $this->encryption->decrypt($usuario->candidato_senha)) {
      unset($usuario->senha);
      return $usuario;
    } else {
      return false;
    }
  }

  public function logarUsuario($usuario) {
    date_default_timezone_set('America/Sao_Paulo');
    $usuario['data_login'] = date('Y-m-d H:i:s');
    return $this->cadastrarLogin($usuario);
  }

}
