<?php
/*
Template Name: Главная
*/
get_header();

$pageId = intval(get_option('page_on_front'));
get_template_part('templates/renderHomePageSlider', false, $pageId);
get_template_part('templates/renderHomePageCards', false, $pageId);
get_template_part('templates/renderHomeOfferSection', false, $pageId);
get_template_part('templates/renderHomeCovidSection', false, $pageId);
get_template_part('templates/renderHomeProblemsSection', false, $pageId);
get_template_part('templates/renderHomeAdvSection', false, $pageId);
get_template_part('templates/renderHomeHeartAndContinuedSections', false, $pageId);
get_template_part('templates/renderHomeTrainingSection', false, $pageId);
get_template_part('templates/renderHomeLastPosts', false, $pageId);

get_footer();
?>