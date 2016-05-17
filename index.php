<?php 
$context = Timber::get_context();
$context['post'] = Timber::get_post();
Timber::render("single.twig", $context);

<<<<<<< HEAD
Timber::render("base.twig");

 get_footer();
=======
>>>>>>> a22a0d37391f5f52b8983c2fca319b929c11322e
