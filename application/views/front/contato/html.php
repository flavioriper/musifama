<div class="row" id="ancor">
  <div class="col-sm-8 col-12 m-auto contato-container">
    <form action="#" method="POST" id="enviar-contato">
      <div class="row">
        <div class="col-12">
          <div class="col-12 text-center inscricao-header">
            <h1>Contato</h1>
            <div class="title-strips-over dark m-auto"></div>
          </div>
        </div>
        <div class="col-sm-6 col-12 py-2 px-2">
          <label for="contato-nome">Nome</label>
          <input class="form-control" type="text" id="contato-nome" placeholder="Nome..." required>
        </div>
        <div class="col-sm-6 col-12 py-2 px-2">
          <label for="contato-email">E-mail</label>
          <input class="form-control" type="email" id="contato-email" placeholder="E-mail..." required>
        </div>
        <div class="col-12 py-2 px-2">
          <label for="contato-assunto">Assunto</label>
          <input class="form-control" type="text" id="contato-assunto" placeholder="Assunto..." required>
        </div>
        <div class="col-12 py-2 px-2">
          <label for="contato-mensagem">Mensagem</label>
          <textarea class="form-control" id="contato-mensagem" rows="5"></textarea>
        </div>
        <div class="col-12 text-right mt-4">
          <button type="submit" class="btn btn-primary mb-2">Enviar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalConfirmacao" tabindex="-1" role="dialog" aria-labelledby="modalConfirmacaoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalConfirmacaoLabel">Sucesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Mensagem enviada com sucesso!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
