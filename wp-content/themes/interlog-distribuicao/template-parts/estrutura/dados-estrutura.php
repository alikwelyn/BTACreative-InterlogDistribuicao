<section id="dados-estrutura">
    <div class="container">
        <div class="row">
            <?php 
                $posts = get_posts(
                    array(
                        'posts_per_page'	=> -1,
                        'post_type'			=> 'dados-estrutura',
                        'order' => 'ASC'
                    )
                );
                if( $posts ): 
            ?>
            <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
            <div class="col-md-4">
                <div class="icon-box">
                    <div class="icon-box-header">
                        <h3><?php echo get_field("number_data_structure"); ?></h3>
                    </div>
                    <div class="icon-box-body">
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <div class="icon-box-footer">
                        <p><?php echo get_field("text_data_structure"); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>