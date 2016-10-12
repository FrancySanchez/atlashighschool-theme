

<div class="container">
 	<div class="p-school__section">
		<?php get_template_part('templates/page', 'header'); ?>
			<div class="alert alert-warning">
  				<?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
			</div>
			<p>It looks like this was the result of either:</p>
  				<ul>
  					<li>a mistyped address</li>
  					<li>an out-of-date link</li>
  				</ul>
		<?php //get_search_form(); ?>
	</div>
</div>

