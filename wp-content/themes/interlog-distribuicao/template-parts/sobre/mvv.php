<section id="mvv">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <?php 
                    $mvv_sobre = get_field('mvv_sobre', 'option');
                ?>
                <div class="grid-cards">
                    <div class="card-1">
                        <div class="icon-box">
                            <div class="icon-box-img">
                                <img src="<?php echo $mvv_sobre['img_c1_mvv_sobre']; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="icon-box-body text-center">
                                <h4><?php echo $mvv_sobre['title_c1_mvv_sobre']; ?></h4>
                                <?php echo $mvv_sobre['text_c1_mvv_sobre']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-2">
                        <div class="icon-box">
                            <div class="icon-box-img">
                                <img src="<?php echo $mvv_sobre['img_c2_mvv_sobre']; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="icon-box-body text-center">
                                <h4><?php echo $mvv_sobre['title_c2_mvv_sobre']; ?></h4>
                                <?php echo $mvv_sobre['text_c2_mvv_sobre']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="side">
                        <div class="icon-box">
                            <div class="icon-box-img">
                                <img src="<?php echo $mvv_sobre['img_side_mvv_sobre']; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="icon-box-body">
                                <h4><?php echo $mvv_sobre['title_side_mvv_sobre']; ?></h4>
                                <?php echo $mvv_sobre['text_side_mvv_sobre']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>