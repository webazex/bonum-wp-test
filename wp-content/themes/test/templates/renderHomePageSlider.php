<?php
$slider = get_field('home_slider', $args);
if ($slider):
?>
<section class="section swiper-container swiper-slider bg-default"
         data-swiper='{"autoplay":{"delay":5000},"effect":"fade"}'>
    <div class="swiper-wrapper text-center">
        <?php
        foreach ($slider as $k => $item):
            if ($k == 0):
                $id = 'id="page-loader"';
            else:
                $id = '';
            endif;
            $button = $item['btn-group'];
            $buttonLink = strip_tags($button['link']);
            $buttonText = strip_tags($button['text']);
            ?>
            <div class="swiper-slide" <?= $id; ?>data-slide-bg="<?= $item['src']; ?>">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 section-slider-custom to-front">
                                    <div class="text-lg-left">
                                        <h2>
                                            <?= $item['title']; ?>
                                        </h2>
                                        <h5 class="d-none d-lg-block mw-400"><?= $item['desc']; ?></h5>
                                        <a class="btn btn-ellipse btn-white offset-top-24" href="<?= $buttonLink; ?>">
                                            <?= $buttonText; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;
        else:
            echo "Нет слайдера";
        endif;
        ?>
    </div>
    <div class="swiper-pagination"></div>
</section>