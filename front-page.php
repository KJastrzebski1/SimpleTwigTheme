<?php


$context = Timber::get_context();

$var = "Message from background";

$context['message'] = $var;
$context['posts'] = Timber::get_posts();
<<<<<<< HEAD
=======
$context['about_us'] = Timber::get_post('about-us');
$context['our_service'] = Timber::get_post('our-service');

>>>>>>> a22a0d37391f5f52b8983c2fca319b929c11322e

Timber::render("front-page.twig", $context);

