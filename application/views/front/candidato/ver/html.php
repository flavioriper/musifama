<div class="row p-sm-5 p-3 candidato-container">
  <div class="col-sm-10 col-12 m-auto">
    <div class="row">
      <div class="col-sm-4 col-12">
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
      <div class="col-sm-8 col-12 candidato-descricao">
        <div class="nome"><?=$candidato->candidato_nome_artistico?> <small><?=$candidato->candidato_nome?></small></div>
        <div class="descricao text-justify mb-2"><?=$candidato->breve_descricao?></div>
        <span><span class="titulo-musica">Música</span> <?=($candidato->musica_id > 0)?$candidato->musica_nome:''?></span>
        <div class="row custom-player <?=($candidato->musica_id > 0)?'active-player':''?>">
          <div class="button"><i id="player-button-icon" class="fas fa-play"></i></div>
          <div class="streaming">
            <input type="range" class="streaming-container" id="player-stream" value="0" max="">
            <input id="player-current-time" type="hidden">
          </div>
        </div>
        <div class="footer">
          <div class="row pt-3">
            <div class="col-sm-6 col-12 text-left container-votos">
              <span class="voto" id="candidato-votos-<?=$candidato->id?>"><?=$candidato->votos?></span>
              <span candidato-id="<?=$candidato->id?>" url="<?=base_url('votacao/votar')?>" class="votar candidato-botao-votar">votar</span>
            </div>
            <div class="col-sm-6 col-12 text-right redes">
              <span>FACE LINKEDIN INSTA</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
