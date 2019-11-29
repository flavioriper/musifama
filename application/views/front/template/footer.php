    </div>
    <footer>
      <div class="row footer-background">
        <div class="col-sm-6 col-12">
          <img src="<?=base_url('assets/img/musifama-logo-footer.png')?>" alt="MUSIFAMA logo">
        </div>
        <div class="col-sm-3 col-6 menu">
          <h1>MENU</h1>
          <div class="menu-footer-item"><a href="<?=base_url('#ancor')?>">SOBRE O EVENTO</a></div>
          <div class="menu-footer-item"><a href="<?=base_url('inscricao#ancor')?>">INSCRIÇÃO</a></div>
          <div class="menu-footer-item"><a href="<?=base_url('regulamento#ancor')?>">REGULAMENTO</a></div>
          <div class="menu-footer-item"><a href="<?=base_url('contato#ancor')?>">CONTATO</a></div>
        </div>
        <div class="col-sm-3 col-6 menu">
          <h1>COMISSÃO AVALIADORA</h1>
          <div class="menu-footer-item">Arnaldo Sacommani</div>
          <div class="menu-footer-item">Laercio Ferreira</div>
          <div class="menu-footer-item">Lucimara Parisi</div>
          <div class="menu-footer-item">Thomas Roth</div>
          <div class="menu-footer-item">Talentos Music</div>
        </div>
      </div>
      <div class="row footer-container">
        <div class="col-12 text-center footer-copyright">
          TODOS OS DIREITOS RESERVADOS MUSIFAMA 2019
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="modalConfirmacaoVoto" tabindex="-1" role="dialog" aria-labelledby="modalConfirmacaoVotoLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalConfirmacaoVotoLabel">Sucesso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Seu voto foi recebido, agradecemos por participar.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    
    <script src="<?=base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js?v=1" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js?v=1" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js?v=1" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?=base_url().'assets/js/font-awesome-icon.js?v=1'?>"></script>
    <script src="<?=base_url().'assets/js/owl.carousel.min.js?v=1'?>"></script>
    <script src="<?=base_url().'assets/js/jquery.mask.js?v=1'?>"></script>
    <script src="<?=base_url().'assets/js/script.js?v=1'?>"></script>
    
    <?php $this->load->view($localPath.'script') ?>
  </body>
</html>
