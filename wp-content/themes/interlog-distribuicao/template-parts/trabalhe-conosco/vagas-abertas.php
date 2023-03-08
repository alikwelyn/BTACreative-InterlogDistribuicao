<section id="vagas-abertas">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Vagas atualmente abertas</h4>
            </div>
            <div class="col-md-12">
                <div class="swiper-container vagas-abertas">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type' => 'vagas',
                            'order' => 'ASC'
                        );
                        $posts = get_posts( $args );

                        if ( $posts ) :
                            foreach ( $posts as $post ) :
                            setup_postdata( $post );
                        ?>
                        <div class="swiper-slide" data-aos="fade-right">
                            <div class="card">
                                <div class="card-header">
                                    <div class="periodo"><span><?php echo get_field( 'periodo'); ?></span></div>
                                    <div class="local"><span><?php echo get_field( 'local'); ?></span></div>
                                </div>
                                <div class="card-body">
                                    <h5><?php the_title(); ?></h5>
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
                <div class="swiper-button-next" id="vagas-abertas-next"></div>
                <div class="swiper-button-prev" id="vagas-abertas-prev"></div>
            </div>
        </div>
    </div>
</section>