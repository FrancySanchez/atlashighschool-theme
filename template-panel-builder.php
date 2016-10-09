<?php
/**
 * Template Name: Panel Builder
 */

$data = Timber::get_context();
// $data['page'] = Timber::get_post();
$data['acfs'] = get_fields();
Timber::render('twigs/panel-builder.twig', $data);

?>
