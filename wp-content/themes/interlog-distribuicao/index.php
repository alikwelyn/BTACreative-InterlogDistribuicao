<?php get_header(); ?>
  <?php get_template_part('template-parts/homepage/banner'); ?>

  <section id="infraestrutura">
    <div class="container">
      <div class="row gx-0">
        <div class="col-md-6 d-flex align-items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/encomenda.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <div class="content">
            <h3>Com infraestrutura e tecnologia, oferecemos a solução completa de serviços logísticos.</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/homepage/servicos'); ?>

  <section id="cotacao">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form-cotacao">

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

          </div>
        </div>
      </div>
    </div>
  </section>

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