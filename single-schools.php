<?php //get_template_part('templates/content-school', get_post_type()); ?>

<?php
/**
 * Template Name: Panel Builder
 */

$data = Timber::get_context();
$data['post'] = Timber::get_post();
$data['acfs'] = get_fields();
Timber::render('twigs/school-content.twig', $data);

?>
