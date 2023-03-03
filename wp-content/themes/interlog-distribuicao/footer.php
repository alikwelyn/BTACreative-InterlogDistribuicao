<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center">
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
            <div class="col-md-6 d-flex justify-content-end">
                <a href="#">Política de privacidade</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script>
// Swipe Slider
$(function() {
    // Carousel Banner Home
    var SwiperBannerHome = new Swiper('.banners-home', {
        loop: true,
        lazy: true,
        navigation: {
        nextEl: '#banner-home-next',
        prevEl: '#banner-home-prev'
        }
    });
    var SwiperBannerPaginas = new Swiper('.banners-paginas', {
        loop: false,
        lazy: true,
        paginationClickable: false,
        touchMoveStopPropagation:false,
        simulateTouch : false, 
        allowSwipeToNext: false, 
        allowSwipeToPrev: false
    });
});

</script>
</body>
</html>