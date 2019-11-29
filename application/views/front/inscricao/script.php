<script>
    $('#enviar-inscricao').click(function() {
      let idade = $('#candidato-idade').val();
      let senha = $('#candidato-senha').val();
      let confirmacaoSenha = $('#candidato-confirmar-senha').val();

      if (idade != '' && idade < 18) {
        $('#responsavel-nome').prop('required', true);
        $('#responsavel-email').prop('required', true);
        $('#responsavel-cep').prop('required', true);
      } else {
        $('#responsavel-nome').prop('required', false);
        $('#responsavel-email').prop('required', false);
        $('#responsavel-cep').prop('required', false);
      }

      $('#submit-inscricao').trigger('click');
    })

    $("#formulario-inscricao").submit(function(ev) {
      ev.preventDefault();

      let confirmacaoSenha = $('#candidato-confirmar-senha').val();

      let inscricao = new Object();
      inscricao.candidato_nome = $('#candidato-nome').val();
      inscricao.candidato_nome_artistico = $('#candidato-nome-artistico').val();
      inscricao.candidato_email = $('#candidato-email').val();
      inscricao.candidato_telefone = $('#candidato-telefone').cleanVal();
      inscricao.candidato_idade = $('#candidato-idade').val();
      inscricao.candidato_cidade = $('#candidato-cidade').val();
      inscricao.candidato_estado = $('#candidato-estado').val();
      inscricao.candidato_cep = $('#candidato-cep').cleanVal();
      inscricao.candidato_senha = $('#candidato-senha').val();
      inscricao.responsavel_nome = $('#responsavel-nome').val();
      inscricao.responsavel_email = $('#responsavel-email').val();
      inscricao.responsavel_cep = $('#responsavel-cep').cleanVal();

      if (inscricao.candidato_senha === confirmacaoSenha) {
        inscricao = JSON.stringify(inscricao);
        $.ajax({
          url: "<?=base_url('front/inscrever')?>",
          type: 'POST',
          data: {inscricao},
          success: function(data) {
            console.log(data)
            if (data == '200') {
              $('#modalConfirmacao').modal('show');
              $("#formulario-inscricao")[0].reset();
            } else if (data == '220') {
              $('#modalSenhaExistente').modal('show');
            }
          }
        })
      } else {
        $('#modalSenha').modal('show');
      }
    })
</script>
