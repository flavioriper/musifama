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

    function CropUpload() {
      var $uploadCrop;
      var blob;
      var filename;
      function readFile(input) {
        if (input.files && input.files[0]) {
          filename = input.files[0].name;
          $('#modalCrop').modal();
          var reader = new FileReader();
          reader.onload = function (e) {
            $uploadCrop.croppie('bind', {
              url: e.target.result
            }).then(function() {
              console.log('Imagem lida com sucesso');
            });
          }
        reader.readAsDataURL(input.files[0]);
        }
        else {
          alert("Seu navegador não suporta o FileReader API. Favor atualizar.");
        }
      }
      $uploadCrop = $('#upload-demo').croppie({
        viewport: {
          width: 300,
          height: 300,
          type: 'square'
        },
        boundary: {
          width: 300,
          height: 300
        },
        enableExif: true
      });
      $('#candidato-imagem').on('change', function () {
        readFile(this);
      });
      $('#salvar-imagem-perfil').click(function() {
        $uploadCrop.croppie('result', {
          type: 'blob',
          size: {width: 300, height: 300}
        }).then(function (resp) {
          blob = resp;
          $('#submit-imagem').trigger('click');
        });
      })

      $('#image-form').submit(function(ev) {
        ev.preventDefault();
        var data = new FormData(this)
        data.append('candidato-imagem', blob);
        data.append('imagem-nome', filename);

        $.ajax({
          url: "<?=base_url('candidato/upload_imagem')?>",
          enctype: 'multipart/form-data',
          type: "POST",
          data: data,
          cache:false,
          contentType: false,
          processData: false,
          success: function(data) {
            if (data != '200' && data != '500') {
              alert('Erro no servidor');
              console.log(data);
            } else {
              location.reload();
            }
          }
        })

      })
    }

    CropUpload();
</script>
