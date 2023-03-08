<section id="melhores-servicos" class="position-relative">
    <div class="container">
      <div class="row">
        <?php $best_services_transport_homepage = get_field('best_services_transport_homepage', 'option'); ?>
        <div class="section-title">
            <?php echo $best_services_transport_homepage['text_best_services_transport_homepage']; ?>
            <?php echo $best_services_transport_homepage['subtext_best_services_transport_homepage']; ?>
        </div>
        <?php 
            $posts = get_posts(
                array(
                    'posts_per_page'	=> -1,
                    'post_type'			=> 'melhores-servicos',
                    'order' => 'ASC'
                )
            );
            if( $posts ): 
        ?>
	    <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="icon-box">
                <div class="icon-box-img">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-fluid" alt="">
                </div>
                <div class="icon-box-body">
                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="col-md-12 text-center mt-2 mb-5">
            <a href="<?php echo $best_services_transport_homepage['link_best_services_transport_homepage']; ?>" class="btn-default">CONHEÇA NOSSOS SERVIÇOS</a>
        </div>
      </div>
    </div>
</section>