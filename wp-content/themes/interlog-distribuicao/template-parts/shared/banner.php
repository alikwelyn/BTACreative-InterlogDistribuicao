<section id="hero-page" class="d-flex align-items-center"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container banners-home">
                    <div class="swiper-wrapper gy-4 d-flex justify-content-between">
                    <?php $banner = get_field('banner_pages', 'option'); ?>
                        <div class="swiper-slide mx-auto text-center d-flex flex-column justify-content-center" style="background-image: url(<?php echo $banner['img_banner'] ?>);">
                            <?php echo $banner['text_banner'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>