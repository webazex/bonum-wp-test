<?php
$content = get_field('home__advs', $args);
?>
<section class="section section-lg p-md-0">
    <div class="container">
        <?php foreach ($content as $item):
            if ($item['img-aligned'] == "r"):
                $align = 'justify-content-md-start';
                $alignText='section-image-aside-right';
                $alignInsetText='inset-lg-right-93';
            elseif ($item['img-aligned'] == "l"):
                $align = 'justify-content-md-end';
                $alignText ='section-image-aside-left';
                $alignInsetText='inset-lg-left-93';
            endif;
            ?>
            <div class="row justify-content-sm-center <?=' ' . $align.' '; ?> offset-top-0">
                <div class="col-sm-10 col-md-6 section-image-aside <?=' '.$alignText.' ' ?> text-center text-md-left">
                    <div class="section-image-aside-img d-none d-md-block"
                         style="background-image: url(<?= $item['src']; ?>)"></div>
                    <div class="section-image-aside-body section-sm-bottom-66 section-sm-top-110 ">
                        <h3>
                            <?=strip_tags(trim($item['title'])); ?>
                        </h3>
                        <div class="offset-top-34 offset-md-top-60">
                            <?=strip_tags($item['desc'], ['<p>', '</p>']); ?>
                        </div>
                        <div class="offset-top-30">
                            <a class="btn btn-ellipse btn-primary" href="<?=strip_tags(trim($item['link'])); ?>">
                                <?=strip_tags(trim($item['link-text'])); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>