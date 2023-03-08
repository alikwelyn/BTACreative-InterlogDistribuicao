<section id="gestao-eletronica-documentos">
  <div class="border"></div>
  <div class="container">
    <div class="row">
      <?php
        $gestao_eletronica_documentos = get_page_by_title( 'Gestão Eletrônica de Documentos', OBJECT, 'servicos' );
        if ( $gestao_eletronica_documentos ) :
            $icon_url = get_field( 'icon_services_homepage', $gestao_eletronica_documentos );
            $text = get_field( 'text_services_homepage', $gestao_eletronica_documentos );
            $thumbnail_url = get_the_post_thumbnail_url( $gestao_eletronica_documentos->ID, 'full' );
      ?>
      <div class="col-md-6">
        <div class="icon-box" data-aos="fade-right">
          <div class="icon-box-img">
            <img src="<?php echo esc_url( $icon_url ); ?>" class="img-fluid" alt="">
          </div>
          <div class="icon-box-body">
            <h4><?php echo esc_html( $gestao_eletronica_documentos->post_title ); ?></h4>
          </div>
          <div class="icon-box-footer">
            <p><?php echo esc_html( $gestao_eletronica_documentos->post_content ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" data-aos="fade-left">
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>