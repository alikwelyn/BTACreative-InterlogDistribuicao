<section id="hero-page" class="d-flex align-items-center"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container banners-home">
                    <div class="swiper-wrapper gy-4 d-flex justify-content-between">
                    <?php 
                        $banner_sobre = get_field('banner_sobre', 'option');
                        $arrLength = count($banner_sobre);
                        foreach($banner_sobre as $key => $value):
                    ?>
                        <div class="swiper-slide mx-auto text-center d-flex flex-column justify-content-center" style="background-image: url(<?php echo $value['img_banner_sobre'] ?>);">
                            <?php echo $value['text_banner_sobre'] ?>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <?php if($arrLength >= 2): ?>
                    <div class="swiper-button-next" id="banner-home-next"></div>
                    <div class="swiper-button-prev" id="banner-home-prev"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>