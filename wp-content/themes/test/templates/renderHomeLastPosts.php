<?php
 $sectionTitle = strip_tags(trim(get_field('home__last-posts-title', $args)));
 $sectionLink = get_field('home__last-posts-link', $args);
 $sectionLinkText = strip_tags(trim(get_field('home__last-posts-link-text', $args)));
 $lastPosts = getLastPost();
?>
<section class="section-98 section-sm-110">
    <div class="container">
        <h3 class="text-center text-lg-left">
            <?=$sectionTitle;?>
        </h3>
        <div class="row justify-content-sm-center offset-top-60">
            <?php
            foreach ($lastPosts as $post):
            $linkToPost = get_permalink($post['ID']);
            $src = get_the_post_thumbnail_url($post['ID'], 'test-news-img');
            $category = get_the_category($post['ID']);
            $catName = $category[0]->name;
            $catId = $category[0]->term_id;
            $catLink = get_category_link($catId);
            $excerpt = get_the_excerpt( $post['ID'] );
            ?>
            <div class="col-md-8 col-lg-4 offset-top-50 offset-md-top-0">
                <!-- Post Modern-->
                <article class="post post-modern post-modern-classic">
                    <!-- Post media-->
                    <div class="post-media">
                        <a class="link-image" href="<?=$linkToPost;?>">
                            <img class="img-responsive img-cover" width="370" height="250" src="<?=$src; ?>" alt=""/>
                        </a>
                    </div>
                    <!-- Post content-->
                    <div class="post-content text-left">
                        <!-- Post Title-->
                        <div class="post-title offset-top-8">
                            <h5 class="font-weight-bold">
                                <a href="<?=$linkToPost;?>">
                                    <?=$post['post_title'];?>
                                </a>
                            </h5>
                        </div>
                        <ul class="list-inline list-inline-dashed">
                            <li>
                                <?=$post['post_date'];?>
                            </li>
                            <li>
                                <a class="text-primary" href="<?=$catLink;?>"><?=$catName;?></a>
                            </li>
                        </ul>
                        <!-- Post Body-->
                        <div class="post-body">
                            <p>
                                <?=$excerpt;?>...
                            </p>
                        </div>
                        <div class="tags group group-sm">
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="offset-top-50 text-center text-lg-left">
            <a class="btn btn-ellipse btn-primary" href="<?=$sectionLink;?>">
                <?=$sectionLinkText; ?>
            </a>
        </div>
    </div>
</section>