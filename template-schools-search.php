<?php
/**
 * Template Name: Schools search Builder
 */

$data = Timber::get_context();
// $data['page'] = Timber::get_post();
$args = array(
	'post_type' => 'schools',
);
$data['schools'] = Timber::get_posts($args);

foreach ($data['schools'] as $key => $school) {
	 $school->featured_image = new TimberImage($school->background_school);
}

$data['acfs'] = get_fields();

Timber::render('twigs/panel-builder.twig', $data);
Timber::render('twigs/schools-search.twig', $data);



?>
