<script>
    $('#candidato-imagem').change(function(ev) {
      let filename = ev.target.files[0].name;
      $('#label-candidato-imagem').text(filename);
    })

    $('#candidato-musica').change(function(ev) {
      let filename = ev.target.files[0].name;
      $('#label-candidato-musica').text(filename);
    })

    $('#enviar-imagem').click(function() {
      if ($('#candidato-imagem').get(0).files.length == 0) {
        $('#modalImagem').modal();
        return;
      } else {
        $('#submit-imagem').trigger('click');
      }
    })

    $('#enviar-musica').click(function() {
      if ($('#candidato-musica').get(0).files.length == 0) {
        $('#modalMusica').modal();
        return;
      } else {
        $('#submit-musica').trigger('click');
      }
    })

    let musica = "<?=($candidato->musica_id > 0)?base_url('assets/candidato_musica/'.$candidato->musica_enc_nome):''?>";
    if (musica != '') {
      musicPlayer(musica);
    }

    $('#salvar-candidato').click(function() {
      let candidato = new Object();
      candidato.breve_descricao = $('#breve_descricao').val();
      candidato = JSON.stringify(candidato);

      $.ajax({
        url: "<?=base_url('candidato/update')?>",
        type: 'POST',
        data: {candidato},
        success: function(data) {
          if (data == '200') {
            $("#modalConfirmacao").modal();
          } else {
            alert('Erro de servidor');
          }
        }
      })
    })
</script>
