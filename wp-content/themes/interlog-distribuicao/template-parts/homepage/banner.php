<section id="hero" class="d-flex align-items-center"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php
                ?>
                <div class="swiper-container banners-home">
                    <div class="swiper-wrapper gy-4 d-flex justify-content-between">
                    <?php 
                        $banner = get_field('banner', 'option');
                        $arrLength = count($banner);
                        foreach($banner as $key => $value):
                    ?>
                        <div class="swiper-slide mx-auto text-center d-flex flex-column justify-content-center" style="background-image: url(<?php echo $value['img_banner'] ?>);">
                            <?php echo $value['text_banner'] ?>
                            <?php echo $value['subtext_banner'] ?>
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