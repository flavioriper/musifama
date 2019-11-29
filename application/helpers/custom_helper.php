<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function redirecionar($link) {
  header('Location: '.base_url($link));
  exit;
}

function nomeUrl($url) {
  // http://php.net/manual/en/function.rawurlencode.php
  // https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/encodeURI
  $unescaped = array(
    '%2D'=>'-','%5F'=>'_','%2E'=>'.','%21'=>'!', '%7E'=>'~',
    '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')'
  );
  $reserved = array(
      '%3B'=>';','%2C'=>',','%2F'=>'/','%3F'=>'?','%3A'=>':',
      '%40'=>'@','%26'=>'&','%3D'=>'=','%2B'=>'+','%24'=>'$'
  );
  $score = array(
      '%23'=>'#'
  );
  return strtr(rawurlencode($url), array_merge($reserved,$unescaped,$score));
}
