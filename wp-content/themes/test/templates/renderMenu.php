<?php
$menu = wp_nav_menu( [
    'theme_location'  => 'header_menu',
    'menu'            => '',
    'container'       => false,
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => 'rd-navbar-nav',
    'menu_id'         => '',
    'echo'            => false,
    'fallback_cb'     => false,
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => '',
] );
echo '<div class="rd-navbar-nav-wrap">'.$menu.'</div>';