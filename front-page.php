<?php

get_header();

$context = array();

$var = "Message from background";

$context['message'] = $var;
$context['post'] = Timber::get_post(2);

Timber::render("front-page.twig", $context);

get_footer();