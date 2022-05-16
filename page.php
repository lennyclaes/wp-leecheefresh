<?php

get_header();

if ( have_posts() ) {
    while (have_posts() ) {
        the_post(  );?>
<article class="page-layout">
    <h1><?php the_title() ?></h1>
    <?php the_content();?>
</article>
<?php
    }
}
else {
    echo '<p>There are no pages</p>';
}

get_footer();