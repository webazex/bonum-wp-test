<?php
    $sectionTitle = strip_tags(trim(get_field('home__training-title', $args)));
    $sectionDesc = get_field('home__training-desc', $args);
    $content = get_field('home__training-content', $args);
    $sectionManual = get_field('home__training-manual', $args);
?>
<section class="text-md-left bg-default-liac section">
    <div class="container-wide container">
        <div class="row justify-content-sm-center">
            <div class="col-xl-5 col-xxl-4 section-90 section-md-122 context-md-dark bg-image-md-fullwidth-1 bg-image-md-fullwidth-1-left d-none d-xl-block"></div>
            <div class="col-md-10 col-lg-12 col-xl-7 col-xxl-8 section-85">
                <div class="inset-lg-left-60 inset-xxl-left-100">
                    <h3>
                        <?=$sectionTitle; ?>
                    </h3>
                    <p>
                        <?=$sectionDesc; ?>
                    </p>
                    <div class="offset-top-41 offset-lg-top-60">
                        <div class="row">
                            <div class="col-lg-12 col-xxl-9">
                                <div class="row row-50">
                                    <?php foreach ($content as $item): ?>
                                    <div class="col-lg-6">
                                        <!-- Icon Box Type 2-->
                                        <div class="unit unit-sm flex-md-row unit-spacing-sm text-md-left align-items-center unit-middle">
                                            <div class="unit-left">
                                                <span class="icon icon icon-sm icon-circle text-primary icon-default mdi mdi-school"></span>
                                            </div>
                                            <div class="unit-body">
                                                <h5 class="font-weight-bold font-weight-bold text-gray-darkest">
                                                    <?=strip_tags(trim($item['title'])); ?>
                                                </h5>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <div class="p unit unit-spacing-xxs flex-row">
                                        <div class="unit-left"><span class="icon icon-xs mdi mdi-phone text-primary"></span></div>
                                        <div class="unit-body">
                                            <p>
                                                <?=$sectionManual;?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
