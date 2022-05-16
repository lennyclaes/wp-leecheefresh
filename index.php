<?php
get_header();

if ( have_posts() ) {
    echo '<div class="posts">';
    while (have_posts() ) {
        the_post(  );?>
<a class="post-link" href="<?php the_permalink( )?>">
    <article class="post">
        <?php if(has_post_thumbnail( )) {?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail( 'small-thumbnail' ); ?>
        </div>
        <?php } else { ?>
        <div class="default-post-thumbnail">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M150.7 92.77C195 58.27 251.8 32 320 32C400.8 32 465.5 68.84 512.6 112.6C559.4 156 590.7 207.1 605.5 243.7C608.8 251.6 608.8 260.4 605.5 268.3C592.1 300.6 565.2 346.1 525.6 386.7L630.8 469.1C641.2 477.3 643.1 492.4 634.9 502.8C626.7 513.2 611.6 515.1 601.2 506.9L9.196 42.89C-1.236 34.71-3.065 19.63 5.112 9.196C13.29-1.236 28.37-3.065 38.81 5.112L150.7 92.77zM223.1 149.5L313.4 220.3C317.6 211.8 320 202.2 320 191.1C320 180.5 316.1 169.7 311.6 160.4C314.4 160.1 317.2 159.1 320 159.1C373 159.1 416 202.1 416 255.1C416 269.7 413.1 282.7 407.1 294.5L446.6 324.7C457.7 304.3 464 280.9 464 255.1C464 176.5 399.5 111.1 320 111.1C282.7 111.1 248.6 126.2 223.1 149.5zM320 480C239.2 480 174.5 443.2 127.4 399.4C80.62 355.1 49.34 304 34.46 268.3C31.18 260.4 31.18 251.6 34.46 243.7C44 220.8 60.29 191.2 83.09 161.5L177.4 235.8C176.5 242.4 176 249.1 176 255.1C176 335.5 240.5 400 320 400C338.7 400 356.6 396.4 373 389.9L446.2 447.5C409.9 467.1 367.8 480 320 480H320z" />
            </svg>
        </div>
        <?php }  ?>
        <div class="post-info">
            <h2><?php the_title() ?></h2>
            <p class="post-meta"><?php the_time('j F Y')?> | <?php the_author(); ?></p>
            <!-- <div class="post-categories">
                        <?php
                            $categories = get_the_category();
                            $output = '';
        
                            if ($categories) {
                                foreach ($categories as $category) {
                                    $output .= '<a class="post-category button" href="' . get_category_link( $category->term_id ) .'">' . $category->cat_name . '</a>';
                                }
                                echo $output;
                            }
                        ?>
                    </div> -->
        </div>

    </article>
</a>
<?php
    }
    echo '</div>';
}
else {
    echo '<p>Er zijn geen berichten</p>';
}

get_footer();
//php the_content()
?>