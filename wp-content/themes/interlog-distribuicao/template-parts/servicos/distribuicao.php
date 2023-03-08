<section id="distribuicao">
  <div class="container">
    <div class="row">
      <?php
        $distribuicao = get_page_by_title( 'Distribuição', OBJECT, 'servicos' );
        if ( $distribuicao ) :
            $icon_url = get_field( 'icon_services_homepage', $distribuicao );
            $text = get_field( 'text_services_homepage', $distribuicao );
        ?>
        <div class="col-md-8 d-flex align-items-stretch mx-auto" data-aos="fade-up">
          <div class="icon-box">
            <div class="icon-box-img">
              <img src="<?php echo esc_url( $icon_url ); ?>" class="img-fluid" alt="">
            </div>
            <div class="icon-box-body">
              <h4><?php echo esc_html( $distribuicao->post_title ); ?></h4>
              <p><?php echo esc_html( $distribuicao->post_content ); ?></p>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div id="sobre-distribuicao" class="row">
        <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'distribuicao',
            'order' => 'ASC'
        );
        $posts = get_posts( $args );

        if ( $posts ) :
            foreach ( $posts as $post ) :
            setup_postdata( $post );
            $thumbnail_url = get_the_post_thumbnail_url( $post, 'full' );
        ?>
        <div class="col-md-3" data-aos="fade-right">
            <div class="card shadow">
            <img class="card-img-top" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
            <div class="card-body">
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
            </div>
            </div>
        </div>
        <?php
            endforeach;
            wp_reset_postdata();
        endif;
        ?>
    </div>
  </div>
</section>