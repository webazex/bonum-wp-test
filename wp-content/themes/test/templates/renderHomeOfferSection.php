<?php
    $contens = get_field('home__advantages', $args);
    $sectionTitle = strip_tags(trim(get_field('home__advantages-title', $args)));
?>
<section class="section-lg bg-default-liac">
    <div class="container text-center text-lg-left">
        <h3><?=$sectionTitle; ?></h3>
        <div class="row offset-top-60 row-50">
<!--            offset-md-top-0 - конкретно здесь и сейчас - зачем????-->
            <?php foreach ($contens as $content): ?>
            <div class="col-md-6 col-lg-4">
                <?=renderIcon($content['advantages__icon-name']); ?>
                <h5 class="font-weight-bold text-gray-darkest">
                    <?=strip_tags(trim($content['advantages__title'])); ?>
                </h5>
                <p>
                    <?=strip_tags(trim($content['advantages__desc'])); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
