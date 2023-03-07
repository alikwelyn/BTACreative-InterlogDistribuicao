<section id="courier-internacional">
  <div class="border"></div>
  <div class="container">
    <div class="row">
      <?php
        $courier_internacional = get_page_by_title( 'Courier Internacional', OBJECT, 'servicos' );
        if ( $courier_internacional ) :
            $icon_url = get_field( 'icon_services_homepage', $courier_internacional );
            $text = get_field( 'text_services_homepage', $courier_internacional );
            $thumbnail_url = get_the_post_thumbnail_url( $courier_internacional->ID, 'full' );
      ?>
      <div class="col-md-6 order-2 order-md-1">
        <img class="img-fluid" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
      </div>
      <div class="col-md-6 order-1 order-md-2">
        <div class="icon-box">
          <div class="icon-box-img">
            <img src="<?php echo esc_url( $icon_url ); ?>" class="img-fluid" alt="">
          </div>
          <div class="icon-box-body">
            <h4><?php echo esc_html( $courier_internacional->post_title ); ?></h4>
          </div>
          <div class="icon-box-footer">
            <p><?php echo esc_html( $courier_internacional->post_content ); ?></p>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>