<section id="infraestrutura">
    <div class="container">
        <div class="row gx-0">
            <?php 
                $infra_tech_homepage = get_field('infra_tech_homepage', 'option');
            ?>
            <div class="col-md-6 d-flex align-items-center">
                <img src="<?php echo $infra_tech_homepage['img_infra_tech_homepage']; ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <div class="content">
                    <?php echo $infra_tech_homepage['text_infra_tech_homepage']; ?>
                    <a href="#" class="btn-default">CONHEÇA NOSSOS SERVIÇOS</a>
                </div>
            </div>
        </div>
    </div>
</section>