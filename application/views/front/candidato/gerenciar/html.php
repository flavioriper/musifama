<div class="row py-5">
  <div class="col-12 text-center inscricao-header">
    <h1>ÁREA DO CANDIDATO</h1>
    <div class="title-strips-over dark m-auto"></div>
  </div>
  <div class="col-sm-4 col-11 m-auto">
    <div class="row">
      <div class="col-12">
        <?php if ($candidato->imagem_id > 0):?>
          <div class="foto-artista">
            <img src="<?=base_url('assets/candidato_imagem/'.$candidato->imagem_enc_nome)?>">
          </div>
        <?php else:?>
          <div class="foto-artista">
            <span>FOTO ARTISTA</span>
          </div>
        <?php endif?>
      </div>
      <div class="col-12" id="imagem">
        <form action="<?=base_url('candidato/upload_imagem')?>" method="POST" enctype="multipart/form-data">
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="candidato-imagem" id="candidato-imagem" accept="image/jpeg, image/png">
              <label class="custom-file-label" id="label-candidato-imagem" for="candidato-imagem">Foto de Perfil</label>
            </div>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" id="enviar-imagem" type="button">Upload</button>
              <button class="hide" type="submit" id="submit-imagem"></button>
            </div>
            <div class="col-12 text-right">
              <span><?=$mensagemImagem?></span>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row my-3" id="musica">
      <div class="col-12 my-2">
        <span>Música <?=($candidato->musica_id > 0)?$candidato->musica_nome:''?></span>
        <div class="row custom-player <?=($candidato->musica_id > 0)?'active-player':''?>">
          <div class="button"><i id="player-button-icon" class="fas fa-play"></i></div>
          <div class="streaming">
            <input type="range" class="streaming-container" id="player-stream" value="0" max="">
            <input id="player-current-time" type="hidden">
          </div>
        </div>
      </div>
      <div class="col-12">
        <form action="<?=base_url('candidato/upload_musica')?>" method="POST" enctype="multipart/form-data">
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="candidato-musica" id="candidato-musica" accept="audio/*">
              <label class="custom-file-label" id="label-candidato-musica" for="candidato-musica">Música</label>
            </div>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" id="enviar-musica" type="button">Upload</button>
              <button class="hide" type="submit" id="submit-musica"></button>
            </div>
            <div class="col-12 text-right">
              <span><?=$mensagemMusica?></span>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-12">
        <span>Breve Descrição</span>
        <textarea class="form-control" id="breve_descricao" rows="3"><?=$candidato->breve_descricao?></textarea>
      </div>
      <div class="col-12 text-right mt-4">
        <button type="button" class="btn btn-primary mb-2" id="salvar-candidato">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalImagem" tabindex="-1" role="dialog" aria-labelledby="modalImagemLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalImagemLabel">Atenção!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        É necessário selecionar uma imagem antes de enviar.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalMusica" tabindex="-1" role="dialog" aria-labelledby="modalMusicaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMusicaLabel">Atenção!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        É necessário selecionar uma música antes de enviar.
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
        <h5 class="modal-title" id="modalConfirmacaoLabel">Atenção!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        As informações foram alteradas com sucesso!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
