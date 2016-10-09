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

// foreach ($data['schools'] as $key => $school) {
	
	
// 	$school['imagen'] = new TimberImage($schoolID);
// };



Timber::render('twigs/schools-search.twig', $data);

?>
