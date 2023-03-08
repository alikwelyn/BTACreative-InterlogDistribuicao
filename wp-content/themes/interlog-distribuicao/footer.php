<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <a href="<?php home_url(); ?>" class="footer-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-interlog-blue.png" alt="<?php echo wp_get_document_title(); ?>">
                </a>
            </div>
            <div class="col-md-4">
                <div class="footer-enderecos">
                    <h5>Matriz - Belo Horizonte</h5>
                    <p>Rua Major Laje, 370 – Ouro Preto, BH<br>
                    Telefone: (31) 3048-9088</p>
                </div>
                <div class="footer-enderecos">
                    <h5>Matriz - Belo Horizonte</h5>
                    <p>Rua Major Laje, 370 – Ouro Preto, BH<br>
                    Telefone: (31) 3048-9088</p>
                </div>
                <div class="footer-enderecos">
                    <h5>Matriz - Belo Horizonte</h5>
                    <p>Rua Major Laje, 370 – Ouro Preto, BH<br>
                    Telefone: (31) 3048-9088</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-enderecos">
                    <h5>Matriz - Belo Horizonte</h5>
                    <p>Rua Major Laje, 370 – Ouro Preto, BH<br>
                    Telefone: (31) 3048-9088</p>
                </div>
                <div class="footer-enderecos">
                    <h5>Matriz - Belo Horizonte</h5>
                    <p>Rua Major Laje, 370 – Ouro Preto, BH<br>
                    Telefone: (31) 3048-9088</p>
                </div>
                <div class="footer-enderecos">
                    <h5>Matriz - Belo Horizonte</h5>
                    <p>Rua Major Laje, 370 – Ouro Preto, BH<br>
                    Telefone: (31) 3048-9088</p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-bottom" class="container">
        <div class="row">
            <div class="col-md-6">
                <p>© 2023 Todos direitos reservados</p>
            </div>
            <div class="col-md-6 politica">
                <a href="#">Política de privacidade</a>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<?php wp_footer(); ?>
<script>
// Preloader
<?php $preloader = get_field('show_preloader', 'option'); if($preloader == true){ ?>
$(document).ready(function() {
  $(window).on('load', function(){
    $('html').css('overflow-y', 'hidden');
    $('.preloader').delay(500).fadeOut('slow', function(){
      $('html').css('overflow-y', 'auto');
    });       
  });
});
<?php } else { ?>
$(document).ready(function() {
  $('html').css('overflow-y', 'auto');
});
<?php } ?>
</script>
</body>
</html>