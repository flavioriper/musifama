<div class="row fundo-login" id="ancor">
  <div class="col-sm-4 col-11 m-auto container-login">
    <form class="formulario-logar" action="<?=base_url('candidato/logar')?>" method="POST">
      <div class="col-12 text-center inscricao-header">
        <h1>LOGIN</h1>
        <div class="title-strips-over dark m-auto"></div>
      </div>
      <div class="col-12 py-4">
        <label>E-mail</label>
        <input class="form-control" type="email" name="email" placeholder="E-mail..." required>
      </div>
      <div class="col-12 py-4">
        <label>Senha</label>
        <input class="form-control" type="password" name="senha" placeholder="Senha..." required>
      </div>
      <div class="col-12 text-right">
        <span class="mensagem-login"><?=$msg?></span>
      </div>
      <div class="col-12 text-right mt-4">
        <button type="submit" class="btn btn-primary mb-2">Entrar</button>
      </div>
    </form>
  </div>
</div>
