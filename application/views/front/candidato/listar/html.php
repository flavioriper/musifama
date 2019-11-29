<div class="row">
  <div class="col-12 candidatos-container">
    <form action="#" id="form-enviar-busca" method="POST">
      <div class="row">
        <div class="col-sm-6 col-12 my-5">
          <input class="form-control" type="text" id="busca-candidatos" placeholder="Busca por participantes">
          <button type="submit" class="btn btn-info" id="enviar-busca">Buscar</button>
        </div>
      </div>
    </form>
    <div class="row">
      <?php foreach($candidatos as $candidato):?>
        <?php if (isset($candidato->id)):?>
          <div class="col-sm-3 col-12 text-center mb-4">
            <div class="container-candidato mx-3">
              <div class="line-card"></div>
              <div class="foto">
              <?php if ($candidato->imagem_id > 0):?>
                  <img src="<?=base_url('assets/candidato_imagem/'.$candidato->imagem_enc_nome)?>">
              <?php else:?>
                <div class="foto-artista">
                  <span>FOTO ARTISTA</span>
                </div>
              <?php endif?>
              </div>
              <div class="nome"><?=$candidato->candidato_nome_artistico?></div>
              <div class="descricao"><?=(strlen($candidato->breve_descricao) > 300)?substr($candidato->breve_descricao, 0, 300).'...':$candidato->breve_descricao?></div>
              <div class="footer">
                <div class="row pt-3">
                  <div class="col-sm-6 text-left container-votos">
                    <span class="voto" id="candidato-votos-<?=$candidato->id?>"><?=$candidato->votos?></span>
                    <span candidato-id="<?=$candidato->id?>" url="<?=base_url('votacao/votar')?>" class="votar candidato-botao-votar">votar</span>
                  </div>
                  <div class="col-sm-6 text-right leia-mais">
                    <a href="<?=base_url('candidato/ver/'.$candidato->id.'/'.nomeUrl($candidato->candidato_nome_artistico))?>" class="botao">leia mais</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif?>
      <?php endforeach?>
    </div>
    <div class="row">
      <div class="col-12 mt-3 text-center pagination-link">
        <?=$this->pagination->create_links()?>
      </div>
    </div>
  </div>
</div>
