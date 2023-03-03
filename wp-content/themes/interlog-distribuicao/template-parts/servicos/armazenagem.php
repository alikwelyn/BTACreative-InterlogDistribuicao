<section id="armazenagem">
  <div class="border"></div>
  <div class="container">
    <div class="row">
      <?php
        $armazenagem = get_page_by_title( 'Armazenagem', OBJECT, 'servicos' );
        if ( $armazenagem ) :
            $icon_url = get_field( 'icon_services_homepage', $armazenagem );
            $text = get_field( 'text_services_homepage', $armazenagem );
            $thumbnail_url = get_the_post_thumbnail_url( $armazenagem->ID, 'full' );
      ?>
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
      </div>
        <div class="col-md-6">
          <div class="icon-box">
            <div class="icon-box-img">
              <img src="<?php echo esc_url( $icon_url ); ?>" class="img-fluid" alt="">
            </div>
            <div class="icon-box-body">
              <h4><?php echo esc_html( $armazenagem->post_title ); ?></h4>
            </div>
            <div class="icon-box-footer">
              <p><?php echo esc_html( $armazenagem->post_content ); ?></p>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>