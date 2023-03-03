<section id="dados-estrutura-second">
  <div class="container">
    <div class="row">
      <?php
        $solucoes_inteligente = get_page_by_title( 'Soluções inteligente', OBJECT, 'dados-estrutura-2' );
        if ( $solucoes_inteligente ) :
            $thumbnail_url = get_the_post_thumbnail_url( $solucoes_inteligente->ID, 'full' );
      ?>
      <div class="col-md-6 d-flex align-items-center">
        <div class="icon-box">
          <div class="icon-box-body">
            <h4><?php echo esc_html( $solucoes_inteligente->post_title ); ?></h4>
          </div>
          <div class="icon-box-footer">
            <p><?php echo esc_html( $solucoes_inteligente->post_content ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>