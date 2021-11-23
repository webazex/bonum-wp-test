<?php
if (have_rows('home_cards', $args)):
?>
<section class="bg-default-liac bg-white-liac section section-md pt-xl-0">
    <div class="container section-top-34 section-lg-top-0">
        <div class="row no-gutters justify-content-sm-center justify-content-xl-start offset-lg-top-34-negative sheldue text-sm-left to-front row-30">
            <?php
            while (have_rows('home_cards', $args)):the_row();
                if (get_row_layout() == 'work-time'):
                    $workDaysGroup = get_sub_field('working-days-group');
                    $weekendDaysGroup = get_sub_field('weekend-days-group');
                    ?>
                    <div class="col-md-8 col-lg-5 col-xl-3">
                        <div class="sheldue-item first">
                            <div class="sheldue-item-body">
                                <div class="icon icon-xs mdi mdi-calendar-clock text-white-50"></div>
                                <h6 class="d-inline-block inset-left-10 text-white">
                                    <?php
                                    the_sub_field('title');
                                    ?>
                                </h6>
                                <hr>
                                <div class="row offset-top-24 justify-content-sm-between text-gray-light">
                                    <div class="col-sm-4">
                                        <?= strip_tags($workDaysGroup['days']); ?>
                                    </div>
                                    <div class="col-sm-7 offset-top-10 offset-xs-top-0 text-sm-right">
                                        <?= strip_tags($workDaysGroup['times']); ?>
                                    </div>
                                    <div class="col-sm-4 offset-top-30 offset-xs-top-10">
                                        <?= strip_tags($weekendDaysGroup['saturday']); ?>
                                    </div>
                                    <div class="col-sm-7 offset-top-10 text-sm-right">
                                        <?= strip_tags($weekendDaysGroup['times-saturday']); ?>
                                    </div>
                                    <div class="col-sm-4 offset-top-30 offset-xs-top-10">
                                        <?= strip_tags($weekendDaysGroup['sunday']); ?>
                                    </div>
                                    <div class="col-sm-7 offset-top-10 text-sm-right">
                                        <?= strip_tags($weekendDaysGroup['times-sunday']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="sheldue-more">
                                <a class="btn btn-white btn-block btn-rect" href="<?php the_sub_field('link'); ?>">
                                    <?php the_sub_field('link-text'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php elseif (get_row_layout() == 'doctors-time'): ?>
                    <div class="col-md-8 col-lg-5 col-xl-3">
                        <div class="sheldue-item light">
                            <div class="sheldue-item-body">
                                <div class="icon icon-xs mdi mdi-calendar-today text-white-50"></div>
                                <h6 class="d-inline-block inset-left-10 text-white">
                                    <?php the_sub_field('title'); ?>
                                </h6>
                                <hr>
                                <div class="offset-top-24 text-gray-light">
                                    <p>
                                        <?php the_sub_field('desc'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="sheldue-more">
                                <a class="btn btn-white btn-block btn-rect" href="<?php the_sub_field('link'); ?>">
                                    <?php the_sub_field('link-text'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php elseif (get_row_layout() == 'appointments'): ?>
                    <div class="col-md-8 col-lg-5 col-xl-3">
                        <div class="sheldue-item">
                            <div class="sheldue-item-body">
                                <div class="icon icon-xs mdi mdi-phone text-white-50"></div>
                                <h6 class="d-inline-block inset-left-10 text-white">
                                    <?php the_sub_field('title'); ?>
                                </h6>
                                <hr>
                                <div class="offset-top-24 text-gray-light">
                                    <p>
                                        <?php the_sub_field('desc'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="sheldue-more">
                                <a class="btn btn-white btn-block btn-rect" href="<?php the_sub_field('link'); ?>">
                                    <?php the_sub_field('link-text'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'call-us'):
                    $override = boolval(intval(get_sub_field('override-content')));
                    if ($override):
                        $phones = get_sub_field('phones');
                        $adress = get_sub_field('adress');
                    else:
                        $phones = get_field('phones', 'option');
                        $adress = strip_tags(get_field('adress', 'option'));
                    endif;
                    $title = strip_tags(get_sub_field('title'));
                    $link = strip_tags(get_sub_field('link'));
                    $linkText = strip_tags(get_sub_field('link-text'));
                    ?>
                    <div class="col-md-8 col-lg-5 col-xl-3">
                        <div class="sheldue-item light last">
                            <div class="sheldue-item-body">
                                <div class="icon icon-xs icon-emergency-01 text-white-50"></div>
                                <h6 class="d-inline-block inset-left-10 text-white">
                                    <?=$title; ?>
                                </h6>
                                <hr>
                                <div class="offset-top-24">
                                    <h5 class="font-weight-bold">
                                        <a class="text-white" href="tel:<?=strip_tags($phones['tel']); ?>">
                                            <?=strip_tags($phones['text']); ?>
                                        </a>
                                    </h5>
                                    <p class="text-gray-light">
                                        <?=strip_tags($adress); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="sheldue-more">
                                <a class="btn btn-white btn-block btn-rect" href="<?=$link; ?>">
                                    <?=$linkText; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; endwhile; endif; ?>
        </div>
    </div>
</section>
