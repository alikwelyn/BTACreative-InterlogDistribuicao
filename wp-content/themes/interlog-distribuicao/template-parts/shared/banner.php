<section id="hero-page" class="d-flex align-items-center"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container banners-paginas">
                    <div class="swiper-wrapper gy-4 d-flex justify-content-between">
                    <?php $banner = get_field('img_banner_pages'); ?>
                        <div class="swiper-slide mx-auto text-center d-flex flex-column justify-content-center" style="background-image: url(<?php echo get_field('img_banner_pages') ?>);">
                            <?php echo get_field('text_banner_pages') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>