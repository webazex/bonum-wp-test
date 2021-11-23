<?php
    $adress = getAdress();
    $phones = get_field('footer_phones-group', 'option');
    $policy = get_field('privace-policy', 'option');
?>
<footer class="section-relative section-top-66 section-bottom-34 page-footer bg-accent context-dark footer-classic">
    <div class="container">
        <div class="row justify-content-md-center text-xl-left">
            <div class="col-md-8 col-lg-12">
                <div class="row justify-content-sm-center row-40">
                    <div class="col-sm-10 col-lg-4 text-left order-lg-3 inset-lg-left-50">
                        <h6>
                            <?=strip_tags(trim(get_field('footer_title-newsletter', 'option'))); ?>
                        </h6>
                        <hr class="text-subline">
                        <p class="text-white-70">
                            <?=strip_tags(trim(get_field('footer_content-newsletter', 'option'))); ?>
                        </p>
                        <?=do_shortcode('[contact-form-7 id="188" title="Подписка" html_class="rd-mailform"]');?>
<!--                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">-->
<!--                            <div class="form-wrap input-group input-group-custom input-group-sm no-wrap">-->
<!--                                <label class="form-label" for="subscribe-form-email">Your e-mail...</label>-->
<!--                                <input class="form-input mr-2" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">-->
<!--                                <button class="btn btn-sm btn-darkest" type="submit">Subscribe</button>-->
<!--                            </div>-->
<!--                        </form>-->
                    </div>
                    <div class="col-sm-10 text-sm-left col-lg-4 order-lg-2">
                        <h6>
                            <?=strip_tags(trim(get_field('footer_title-contact-us', 'option'))); ?>
                        </h6>
                        <hr class="text-subline">
                        <div class="text-center text-xl-left">
                            <address class="contact-info d-md-inline-block text-left">
                                <div class="p unit unit-spacing-xxs flex-row">
                                    <div class="unit-left"><span class="icon icon-xxs mdi mdi-phone text-white"></span></div>
                                    <div class="unit-body">
                                    <?php
                                    $total = count($phones);
                                    $counter = 0;
                                    foreach($phones as $k => $phone):
                                        $counter++;
                                    if($counter == $total):
                                    $separator = '';
                                    else:
                                    $separator = '<span class="text-white-70">, </span>';
                                    endif;
                                    ?>
                                        <a class="text-white-70" href="<?=$phone['link-tel']; ?>">
                                            <?=$phone['text-tel']; ?>
                                        </a>
                                        <?=$separator; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="p unit flex-row unit-spacing-xxs">
                                    <div class="unit-left"><span class="icon icon-xxs mdi mdi-map-marker text-white"></span></div>
                                    <div class="unit-body">
                                        <a class="text-white-70" href="#">
                                            <?=getAdress();?>
                                        </a>
                                    </div>
                                </div>
                                <div class="p unit unit-spacing-xxs flex-row offset-top-16">
                                    <div class="unit-left"><span class="icon icon-xxs mdi mdi-email-outline text-white"></span></div>
                                    <div class="unit-body">
                                        <a class="text-white-70 text-java" href="mailto:<?=strip_tags(trim(get_field('callback-mail', 'option'))); ?>">
                                            <?=strip_tags(trim(get_field('callback-mail', 'option'))); ?>
                                        </a>
                                    </div>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-10 col-lg-4 order-lg-1 text-center text-lg-left">
                        <!--Brand--><?=renderLogo();?>
                        <div class="offset-top-30">
                            <?=renderSocialRow();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container offset-top-50 offset-md-top-60">
        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span> <?=strip_tags(trim(get_field('copyright', 'option')));?>&nbsp;</span>
            <a href="<?=strip_tags(trim($policy['link'])); ?>"><?=strip_tags(trim($policy['text'])); ?></a></p>
    </div>
</footer>
</div>
<div class="snackbars" id="form-output-global"></div>

<?php wp_footer(); ?>
</body>
</html>

