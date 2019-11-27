<script>
    $('#candidato-imagem').change(function() {
      alert('oi')
      let filename = $(this).val();
      $('#label-candidato-imagem').text(filename);
      alert(filename);
    })
</script>
