<?php get_header(); ?>
  <?php get_template_part('template-parts/homepage/banner'); ?>

  <?php get_template_part('template-parts/homepage/infraestrutura'); ?>

  <?php get_template_part('template-parts/homepage/servicos'); ?>

  <?php get_template_part('template-parts/homepage/cotacao'); ?>

  <section id="melhores-servicos">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h3>Temos orgulho em fornecer os <span>melhores serviços de transporte e envio</span> a nível nacional</h3>
          <p>Trabalhamos todos os dias para conquistar a confiança dos nossos clientes.</p>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon-box-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/distribuicao.png" class="img-fluid" alt="">
            </div>
            <div class="icon-box-body">
              <h4>Rápido e Eficiente</h4>
              <p>Nós aprimoramos nossas operações, aliviando você das preocupações.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon-box-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/distribuicao.png" class="img-fluid" alt="">
            </div>
            <div class="icon-box-body">
              <h4>Rápido e Eficiente</h4>
              <p>Nós aprimoramos nossas operações, aliviando você das preocupações.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon-box-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/distribuicao.png" class="img-fluid" alt="">
            </div>
            <div class="icon-box-body">
              <h4>Rápido e Eficiente</h4>
              <p>Nós aprimoramos nossas operações, aliviando você das preocupações.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>