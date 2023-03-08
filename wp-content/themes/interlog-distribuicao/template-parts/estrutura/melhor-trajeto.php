<section id="dados-estrutura-second">
  <div class="container">
    <div class="row">
      <?php
        $melhor_trajeto = get_page_by_title( 'Melhor trajeto', OBJECT, 'dados-estrutura-2' );
        if ( $melhor_trajeto ) :
            $thumbnail_url = get_the_post_thumbnail_url( $melhor_trajeto->ID, 'full' );
      ?>
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" data-aos="fade-right">
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="icon-box" data-aos="fade-left">
          <div class="icon-box-body">
            <h4><?php echo esc_html( $melhor_trajeto->post_title ); ?></h4>
          </div>
          <div class="icon-box-footer">
            <p><?php echo esc_html( $melhor_trajeto->post_content ); ?></p>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>