<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function redirecionar($link) {
  header('Location: '.base_url($link));
  exit;
}
