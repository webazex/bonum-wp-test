<?php
    $sectionTitle = strip_tags(trim(get_field('home__cont-title', $args)));
    $htmlContent = get_field('home__cont-desc', $args);
    $sectionHeartTitle = strip_tags(trim(get_field('home__heart-title', $args)));
    $fullName = strip_tags(trim(get_field('home__heart-fio', $args)));
    $textLink = strip_tags(trim(get_field('home__heart-link-text')));
?>
<section class="section-lg bg-default text-left section">
    <div class="container">
        <div class="row justify-content-sm-center row-30">
            <div class="col-sm-10 col-lg-8">
                <h3>
                    <?=$sectionTitle;?>
                </h3>
                <div class="offset-top-20 offset-lg-top-60">
                   <?=$htmlContent;?>
                </div>
            </div>
            <div class="col-sm-10 col-lg-4">
                <h6>
                    <?=$sectionHeartTitle; ?>
                </h6>
                <hr class="text-subline">
                <div class="offset-top-30">
                    <div class="unit flex-xxl-row flex-xl-row flex-lg-column flex-md-row flex-sm-row unit-spacing-sm">
                        <div class="unit-left">
                            <img class="img-responsive" src="<?=get_field('home__heart-src', $args); ?>"  alt=""/>
                        </div>
                        <div class="unit-body">
                            <h5 class="font-weight-bold text-primary">
                                <?=$fullName;?>
                            </h5>
                            <?=get_field('home__heart-desc', $args); ?>
                        </div>
                    </div>
                    <p>
                        <a class="btn btn-primary btn-ellipse" href="<?=get_field('home__heart-link', $args);?>">
                            <?=$textLink;?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
