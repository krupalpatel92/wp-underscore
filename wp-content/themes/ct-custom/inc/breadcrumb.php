<?php

function get_breadcrumb()
{

    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';

    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        the_category(' &#187; ');
        if (is_single()) {
            echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
            echo get_the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo get_the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}
