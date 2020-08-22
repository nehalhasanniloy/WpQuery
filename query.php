<?php

$args = array(
    "post_type"   => "post",
    "post_status" => "publish",
    "author_name" => "query",
    "cat"         => ' 2,3',
);

// The Query
$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts()) {
    echo '<ul>';
    while ($the_query->have_posts()) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';

    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
