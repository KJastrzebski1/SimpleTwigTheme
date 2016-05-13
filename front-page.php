<?php

get_header();

$context = array();

$var = "Message from background";

$context['message'] = $var;
$context['posts'] = Timber::get_posts();

Timber::render("front-page.twig", $context);

get_footer();