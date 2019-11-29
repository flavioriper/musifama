<div class="row">
  <div class="col-12">
    <img class="logo-inscricao" src="<?=base_url('assets/img/musifama-logo-inscricao.png')?>" alt="MUSIFAMA LOGO">
  </div>
</div>
<div class="row formulario-inscricao" id="ancor">
  <form action="#" id="formulario-inscricao">
    <div class="row w-75 m-auto py-3 inscricao-container">
      <div class="col-12 text-center inscricao-header">
        <h1>Artista</h1>
        <div class="title-strips-over dark m-auto"></div>
      </div>
      <div class="col-sm-6 col-12 px-2 my-3 my-3">
        <label for="candidato-nome">Nome*</label>
        <input class="form-control" type="text" id="candidato-nome" placeholder="Nome..." required>
      </div>
      <div class="col-sm-6 col-12 px-2 my-3">
        <label for="candidato-nome-artistico">Nome Artístico*</label>
        <input class="form-control" type="text" id="candidato-nome-artistico" placeholder="Nome artístico..." required>
      </div>
      <div class="col-sm-6 col-12 px-2 my-3">
        <label for="candidato-email">E-mail*</label>
        <input class="form-control" type="email" id="candidato-email" placeholder="E-mail..." required>
      </div>
      <div class="col-sm-3 col-12 px-2 my-3">
        <label for="candidato-telefone">Telefone/WhatsApp*</label>
        <input class="form-control phone_with_ddd" type="text" id="candidato-telefone" placeholder="(00) 00000-0000" required>
      </div>
      <div class="col-sm-3 col-12 px-2 my-3">
        <label for="candidato-idade">Idade*</label>
        <input class="form-control" type="number" id="candidato-idade" placeholder="Idade..." required>
      </div>
      <div class="col-sm-6 col-12 px-2 my-3">
        <label for="candidato-cidade">Cidade</label>
        <input class="form-control" type="text" id="candidato-cidade">
      </div>
      <div class="col-sm-3 col-12 px-2 my-3">
        <label for="candidato-estado">Estado</label>
        <select class="form-control" id="candidato-estado">
            <option selected disabled>Escolher...</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
      </div>
      <div class="col-sm-3 col-12 px-2 my-3">
        <label for="candidato-cep">CEP</label>
        <input class="form-control cep" type="text" id="candidato-cep">
      </div>
      <div class="col-sm-6 col-12 px-2 my-3">
        <label for="candidato-senha">Senha</label>
        <input class="form-control" type="password" id="candidato-senha" required>
      </div>
      <div class="col-sm-6 col-12 px-2 my-3">
        <label for="candidato-confirmar-senha">Confirmar Senha</label>
        <input class="form-control" type="password" id="candidato-confirmar-senha" required>
      </div>
    </div>
    <div class="row w-75 m-auto py-3 inscricao-container">
      <div class="col-12 text-center inscricao-header">
        <h1>RESPONSÁVEL (No caso de menor de idade)</h1>
        <div class="title-strips-over dark m-auto"></div>
      </div>
      <div class="col-sm-6 col-12 px-2 my-3">
        <label for="responsavel-nome">Nome</label>
        <input class="form-control" type="text" id="responsavel-nome" placeholder="Nome...">
      </div>
      <div class="col-sm-3 col-12 px-2 my-3">
        <label for="responsavel-email">E-mail</label>
        <input class="form-control" type="email" id="responsavel-email" placeholder="E-mail...">
      </div>
      <div class="col-sm-3 col-12 px-2 my-3">
        <label for="responsavel-cep">CEP</label>
        <input class="form-control cep" type="text" id="responsavel-cep">
      </div>
      <div class="col-12 text-center mt-4 mb-5">
        <button type="button" class="btn btn-primary mb-2" id="enviar-inscricao">Enviar</button>
        <button type="submit" class="hide" id="submit-inscricao">submit</button>
      </div>
    </div>
  </form>
</div>

<!-- Modal -->
<div class="modal fade" id="modalSenha" tabindex="-1" role="dialog" aria-labelledby="modalSenhaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSenhaLabel">Atenção!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        A senha e a confirmação de senha precisam ser exatamente iguais.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalSenhaExistente" tabindex="-1" role="dialog" aria-labelledby="modalSenhaExistenteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSenhaExistenteLabel">Atenção!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        E-mail já está cadastrado, favor escolher outro.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
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
        Seu cadastro foi realizado com sucesso. <a href="<?=base_url('candidato')?>">Clique aqui</a> para acessar a área de candidato.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
