<section id="servico-interlog">
    <div class="container">
      <div class="section-title">
        <h3>Serviços Interlog</h3>
      </div>
      <div class="row">
        <?php 
            $posts = get_posts(
                array(
                    'posts_per_page'	=> -1,
                    'post_type'			=> 'servicos',
                    'order' => 'ASC'
                )
            );
            if( $posts ): 
        ?>
	    <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
                <div class="icon-box-img">
                    <img src="<?php echo get_field("icon_services_homepage"); ?>" class="img-fluid" alt="">
                </div>
                <div class="icon-box-body">
                    <h4><?php the_title(); ?></h4>
                    <p><?php echo get_field("text_services_homepage"); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
</section>