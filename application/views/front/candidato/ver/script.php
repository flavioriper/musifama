<script>
    let musica = "<?=($candidato->musica_id > 0)?base_url('assets/candidato_musica/'.$candidato->musica_enc_nome):''?>";
    if (musica != '') {
      musicPlayer(musica);
    }
</script>
