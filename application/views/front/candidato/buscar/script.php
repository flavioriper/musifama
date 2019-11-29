<script>
  $('#busca-candidatos').keyup(function() {
    if ($(this).val().length > 0) {
      $('#enviar-busca').prop('disabled', false);
    } else {
      $('#enviar-busca').prop('disabled', true);
    }
  })

  $('#form-enviar-busca').submit(function(ev) {
    ev.preventDefault();
    let busca = encodeURIComponent($('#busca-candidatos').val());
    location.href = `<?=base_url('candidatos/buscar/')?>${busca}`;
  })

  $('#limpar-busca').click(function() {
    location.href = `<?=base_url('candidatos')?>`;
  })
</script>
