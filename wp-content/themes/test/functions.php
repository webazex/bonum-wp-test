<?php
///add supports
add_theme_support('custom-logo');
add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts()
{
    wp_enqueue_style('google-fonts',
        '//fonts.googleapis.com/css?family=Asap:400,500,600,700%7CLato:400italic,400,700');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/style.css');
    //js
    wp_enqueue_script('core-min',
        get_template_directory_uri() . '/assets/js/core.min.js', array(), '1.0.0', true);
    wp_enqueue_script('script',
        get_template_directory_uri() . '/assets/js/script.js', array('core-min'), '1.0.0', true);
}

//====header
//====header-menu
//after_setup_theme
add_action('init', function () {
    register_nav_menus([
        'header_menu' => 'header',
    ]);
});
add_filter('nav_menu_css_class', 'setClassesForMenuItems', 10, 4);
function setClassesForMenuItems($classes)
{
    $classes[] = 'rd-nav-item';
    return $classes;
}

// Добавляем классы и атрибуты ссылкам в пунктах меню
add_filter('nav_menu_link_attributes', 'setClassesForMenuItemsLinks', 10, 4);
function setClassesForMenuItemsLinks($attr)
{
    $attr['class'] = 'rd-nav-link';
    return $attr;
}
//меняем кастомный класс .current на .active
//в чем проблема была заверстать под wp???
add_filter('nav_menu_css_class' , 'setActiveClassForMenuItems' , 10 , 2);
function setActiveClassForMenuItems ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
//====header-logo
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(
        array(
            'page_title' 	=> 'Настройки темы',
            'menu_title'	=> 'Настройки темы',
            'menu_slug' 	=> 'settings-theme',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        )
    );
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройки header',
        'menu_title'	=> 'Header',
        'menu_slug' 	=> 'settings-theme-h',
        'parent_slug'	=> 'settings-theme',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройки footer',
        'menu_title'	=> 'Footer',
        'menu_slug' 	=> 'settings-theme-f',
        'parent_slug'	=> 'settings-theme',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Контактные данные',
        'menu_title'	=> 'Контактные данные',
        'menu_slug' 	=> 'settings-theme-c',
        'parent_slug'	=> 'settings-theme',
        'redirect'		=> false
    ));

}
//вывод лого
function renderLogo(){
    $linkToHome = get_home_url();
    $html = '<a class="brand" href="'.$linkToHome.'">';
    $renderType = get_field('d&l_logo-switch', 'option');
    switch ($renderType){
        case "0":
            $src = get_field('standart_logo', 'option');
            $html .= '<img class="brand-logo-light" src="'.$src.'" alt="" width="77" height="26"/>';
            break;
        case "1":
            //при необходимости тут будет код который
            // будет определять темную или светлую тему и активировать
            //соответсвующее лого, пока по дефолту светлое лого
            $srcLight = get_field('light_logo', 'option');
            $srcDark = get_field('dark_logo', 'option');
            $html .= '<img class="brand-logo-light" src="'.$srcLight.'" alt="" width="77" height="26"/>';
            $html .= '<img class="brand-logo-dark" src="'.$srcDark.'" alt="" width="77" height="26"/>';
            break;
        case "2":
            $srcLight = get_field('light_logo', 'option');
            $html .= '<img class="brand-logo-light" src="'.$srcLight.'" alt="" width="77" height="26"/>';
            break;
        case "3":
            $srcDark = get_field('dark_logo', 'option');
            $html .= '<img class="brand-logo-dark" src="'.$srcDark.'" alt="" width="77" height="26"/>';
            break;
        default:
            $src = get_field('standart_logo', 'option');
            $html .= '<img class="brand-logo-light" src="'.$src.'" alt="" width="77" height="26"/>';
            break;
    }
    $html .= '</a>';
    return $html;
}

//вывод телефона
function renderPhones(){
    $phoneGroup = get_field('phones', 'option');
    $linkPhone = strip_tags($phoneGroup['tel']);
    $linkText = strip_tags($phoneGroup['text']);
    $html = '<a class="text-white" href="tel:'.$linkPhone.'">'.$linkText.'</a>';
    return $html;
}
//вывод адреса в хедере
function renderAdress(){
    $adress = strip_tags(get_field('adress', 'option'));
    $html = '<a class="text-white" href="#">'.$adress.'</a>';
    return $html;
}

//get icons for section advantages
function renderIcon($name){
    $name = strip_tags(trim($name));
    return '<div class="icon icon-xlg icon-circle icon-default icon-'.$name.'"></div>';
}
//get page link
function renderLinkPage($id = false){
    $pageId = intval(get_option('page_on_front'));
    if($id === false){
        $id = intval(get_field('home__covid-link', $pageId)->ID);
    }else{
        $id = intval($id);
    }
    $linkText = get_field('home__covid-link-text', $pageId);
    return '<a class="btn btn-ellipse btn-white" href="'.get_page_uri($id).'">'.$linkText.'</a>';
}
//====get clean page link
function getLinkPageForId($id = false, $field = 'home__covid-link'){
    $pageId = intval(get_option('page_on_front'));
    if($id === false){
        $id = intval(get_field($field, $pageId));
    }else{
        $id = intval($id);
    }
    return get_page_uri($id);
}
//=====add-img-size
add_theme_support( 'post-thumbnails' );
add_image_size('test-problems-img', 320, 320, true);
add_image_size('test-news-img', 370, 250, true);
//===get=last=posts
function getLastPost($count = 3, $cat = false){
    if($cat === false){
        $catId = 0;
    }
    $settings = array(
        'numberposts' => intval($count),
        'category'         => 0,
        'post_status' => 'publish',
    );
    $posts = wp_get_recent_posts($settings);
    return $posts;
}
function renderSocialRow()
{
    $socials = get_field('social-icons', 'option');
    $html = '<ul class="list-inline">';
    foreach ($socials as $social) {
        $icon = $social['icon'];
        $link = trim($social['link']);
        $html .= '<li>
<a class="icon ' . $icon . ' icon-xxs icon-circle icon-white" href="' . $link . '"></a>
</li>';
    }
    $html .= '</ul>';
    return $html;
}

function getAdress(){
    $adress = strip_tags(get_field('adress', 'option'));
    return $adress;
}