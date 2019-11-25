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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/owl.carousel.min.css'?>"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/owl.theme.default.min.css'?>"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/style.css'?>"/>
    <?php $this->load->view($localPath.'style') ?>
  </head>
  <body>
    <header>
      <div class="row p-2 pl-4 container-header-menu">
        <div class="col-4">
          <img src="<?=base_url('assets/img/musifama-logo.png')?>" alt="MUSIFAMA LOGO">
        </div>
        <div class="col-8 menu-lista">
          <span><a href="<?=base_url()?>">SOBRE O EVENTO</a></span>
          <span><a href="<?=base_url()?>">INSCRIÇÃO</a></span>
          <span><a href="<?=base_url()?>">REGULAMENTO</a></span>
        </div>
      </div>
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
