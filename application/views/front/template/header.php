<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Musifama</title>
    
    <link rel="shortcut icon" type="image/png" href="<?=base_url('')?>"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css?v=1" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/owl.carousel.min.css?v=1'?>"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/owl.theme.default.min.css?v=1'?>"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/style.css?v=1'?>"/>
    <?php $this->load->view($localPath.'style') ?>
  </head>
  <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="navbar">
        <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url('assets/img/musifama-logo.png')?>" alt="MUSIFAMA LOGO"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('#ancor')?>">SOBRE O EVENTO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('inscricao#ancor')?>">INSCRIÇÃO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('regulamento#ancor')?>">REGULAMENTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('candidato')?>">ÁREA DO CANDIDATO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('candidatos')?>">CANDIDATOS</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="row">
        <div class="col-12">
          <div class="owl-carousel">
            <div><img src="<?=base_url('assets/img/banner-new-1.png')?>" alt="Banner 1"></div>
            <div><img src="<?=base_url('assets/img/banner-new-2.png')?>" alt="Banner 2"></div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
