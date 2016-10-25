<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
      <?php get_template_part('templates/head'); ?>

  <body <?php body_class(); ?>>

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php do_action('get_header');
          get_template_part('templates/header'); ?>

    <?php if (is_singular('schools')): 
      
      $headerData = Timber::get_context();
      $image = get_field('background_school');

      
      $headerData['herobg'] =  new TimberImage($image);
      Timber::render('twigs/school-header.twig', $headerData);

     endif 
     ?>


    <?php 
      if (is_single() || is_tax()):
     ?>
      <div class="wrap container" role="document">
        <div class="content row">
    <?php endif ?>
        
      <main class="main">
        <?php include Wrapper\template_path(); ?>
      </main> <!-- </.main -->
          
          <?php if (Setup\display_sidebar()) : ?>
              <aside class="sidebar">
                <?php include Wrapper\sidebar_path(); ?>
             </aside> <!-- /.sidebar --> 
          <?php endif; ?>
      
      <?php 
            if (is_single() || is_tax()):
      ?>
        </div>
      <!-- </.content -->
    </div> 
    <!-- /.wrap  -->
      <?php endif ?>
    
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
