<?php
$titleSection = strip_tags(trim(get_field('home__problems-title', $args)));
$desc = strip_tags(trim(get_field('home__problems-desc', $args)));
$content = get_field('home__problems-content', $args);
?>
<section class="section-lg bg-default section">
    <div class="container">
        <h3 class="text-center">
            <?=$titleSection;?>
        </h3>
        <div class="offset-top-41">
            <p class="custom-paragraph">
                <?=$desc;?>
            </p>
        </div>
        <div class="row offset-top-60 text-lg-left row-30">
            <?php
                foreach ($content as $item):
                    $id = $item['link'];
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="service">
                    <?php
                    $src = wp_get_attachment_image_src(intval($item['img']), 'test-problems-img')[0];
                    ?>
                    <img class="img-responsive" src="<?=$src;?>" width="320" height="320" alt=""/>
                    <a class="service-desc h6" href="<?=getLinkPageForId($id, ''); ?>">
                        <?=$item['title']; ?>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
