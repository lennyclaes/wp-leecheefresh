<?php
get_header();

if ( have_posts() ) {
    while (have_posts() ) {
        the_post(  );?>
<div class="post-main">
    <h1 class="post-title"><?php the_title() ?></h1>
    <?php if(has_post_thumbnail( )) {?>
    <div class="post-image">
        <?php the_post_thumbnail( 'single-post-hero' ); ?>
    </div>
    <?php } ?>
    <div class="post-categories">
        <?php
                    $categories = get_the_category();
                    $output = '';

                    if ($categories) {
                        foreach ($categories as $category) {
                            $output .= '<a class="post-category" href="' . get_category_link( $category->term_id ) .'">' . $category->cat_name . '</a>';
                        }
                        echo $output;
                    }
                ?>
    </div>
    <?php the_content();?>
    <p class="post-meta"><?php the_time('j F Y')?> | <?php the_author(); ?></p>
</div>
<?php
    }
}
else {
    echo '<p>Er zijn geen berichten</p>';
}

get_footer();
?>