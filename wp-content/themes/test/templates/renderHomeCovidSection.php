<?php
    $title = strip_tags(trim(get_field('home__covid-title', $args)));
    $desc = strip_tags(trim(get_field('home__covid-desc', $args)));
    $src = strip_tags(trim(get_field('home__covid-bg', $args)));
?>
<section class="parallax-container" data-parallax-img="<?=$src;?>">
    <div class="parallax-content section-98 section-sm-110 context-dark">
        <div class="container text-left">
            <div class="row justify-content-sm-center justify-content-lg-start">
                <div class="col-md-10 col-lg-9 col-xl-7">
                    <h3>
                        <?=$title;?>
                    </h3>
                    <p class="offset-top-30 text-white">
                        <?=$desc; ?>
                    </p>
                    <div class="offset-top-30">
                        <?=renderLinkPage(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
