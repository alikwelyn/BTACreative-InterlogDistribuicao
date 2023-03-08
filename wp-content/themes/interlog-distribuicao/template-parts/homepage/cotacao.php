
<section id="cotacao">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-cotacao" data-aos="zoom-in">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#cotacaoForm">Cotação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#rastreamentoForm">Rastreamento</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane container active" id="cotacaoForm">
                            <?php echo do_shortcode('[contact-form-7 id="14" title="Contact form 1"]'); ?>
                        </div>
                        <div class="tab-pane container fade" id="rastreamentoForm">
                            Nothing
                        </div>
                    </div>
                    <div class="text-center">
                    <p>Quer solicitar mais itens nas sua cotação?</p>
                    <?php $quo_track_homepage = get_field('quo_track_homepage', 'option'); ?>
                    <a href="<?php echo $quo_track_homepage['link_quo_track_homepage']; ?>" class="acesse">Acesse a página completa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>