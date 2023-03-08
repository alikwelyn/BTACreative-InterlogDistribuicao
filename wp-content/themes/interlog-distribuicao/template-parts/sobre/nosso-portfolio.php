<section id="nosso-portfolio">
    <div class="container">
        <div class="row">
            <?php 
                $our_port_sobre = get_field('our_port_sobre', 'option');
            ?>
            <div class="col-md-6 d-flex align-items-center">
                <img src="<?php echo $our_port_sobre['img_our_port_sobre']; ?>" class="img-fluid" alt="" data-aos="fade-right">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center" data-aos="fade-left">
                <div class="content">
                    <?php echo $our_port_sobre['text_our_port_sobre']; ?>
                </div>
            </div>
        </div>
    </div>
</section>