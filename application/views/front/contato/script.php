<script>
  $('#enviar-contato').submit(function(ev) {
    ev.preventDefault();
    let contato = new Object();
    contato.nome = $('#contato-nome').val();
    contato.email = $('#contato-email').val();
    contato.assunto = $('#contato-assunto').val();
    contato.mensagem = $('#contato-mensagem').val();

    contato = JSON.stringify(contato);
    $.ajax({
      url: "<?=base_url('front/enviar_contato')?>",
      type: "POST",
      data: {contato},
      success: function(data) {
        if (data == '200') {
          $('#enviar-contato')[0].reset();
          $('#modalConfirmacao').modal();
        } else {
          alert('erro interno');
        }
      }
    })
  })
</script>
