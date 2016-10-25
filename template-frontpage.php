<?php
/**
 * Template Name: front page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>


<!-- SECTION MAIN ON -->
<div class="c-section-main c-text " style="background-image: url(<?php the_field('hero_background') ?>)" id="home">
     <div class="container">
      <div class="row">
        <div class="col-md-12">
              <h1 class="c-section-main__title"><?php the_field('hero_title') ?></h1>
              <p class="c-section-main__text"> <?php the_field('hero_subtitle') ?></p>
              <a href="high-school" class="btn btn-primary btn-justified" title="Find a great High School"><?php the_field('hero_button_text') ?></a>
          </div>
      </div>
      </div>
  </div>
<!-- SECTION MAIN OFF-->

<!-- SECTION 1 ON -->
<div class="c-section-information c-text container" id="information">
    <div class="row">
        <div class="col-md-3 text-center">
            <a href="high-school/">
              <i class="c-section-information__icon circulo fa fa-map-marker fa-5x"></i>
            </a>
            <p class="c-section-information__text"><?php the_field('icon_1_description')?></p>
        </div>
        <div class="col-md-3 text-center">
            <a href="irish-education-system">
              <i class="c-section-information__icon circulo fa fa-flag fa-5x"></i>
            </a>
            <p class="c-section-information__text"> <?php the_field('icon_2_description')?></p>
        </div>
         <div class="col-md-3 text-center">
            <a href="registration-process">
              <i class="c-section-information__icon circulo fa fa-comments-o fa-5x"></i>
            </a> 
            <p class="c-section-information__text"><?php the_field('icon_3_description')?></p>
        </div>
        <div class="col-md-3 text-center">
            <a href="accommodation">
              <i class="c-section-information__icon circulo fa fa-home fa-5x"></i>
             </a> 
            <p class="c-section-information__text"><?php the_field('icon_4_description')?></p>
        </div>
    </div>
  </div>
<!-- SECTION 1 OFF-->

<!-- SECTION 2 Top High School ON -->
<div class="c-section-highschool c-text" id="highschool">
    <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <h1 class="c-section-highschool__title"><?php the_field('top_high_school_title')?></h1>
              <p class="c-section-highschool__text"><?php the_field('top_high_school_text')?></p>
              <a href="high-school" class="btn btn-primary btn-justified" title="See our partner high School"><?php the_field('top_high_school_button_text')?></a>
          </div>
        </div>
    </div>
<div class="container">
      <div class="row container__img">
          <div class="col-md-4 ">
             <img class="c-section-highschool__img" src=" <?php the_field('top_high_school_img_1') ?>"> 
          </div>
          <div class="col-md-4 ">
             <img class="c-section-highschool__img" src=" <?php the_field('top_high_school_img_2') ?>"> 
          </div>
          <div class="col-md-4 ">
             <img class="c-section-highschool__img" src=" <?php the_field('top_high_school_img_3') ?>"> 
          </div>
        </div>  
  </div>   
</div>
<!-- SECTION 2 OFF-->

<!-- SECTION 3 Brochure ON -->
<div class="c-section-brochure c-text container" id="brochure">
    <div class="row">
       <div class="col-md-6">
            <h1 class="c-section-brochure__title"><?php the_field('brochure_part_left_title')?></h1>
            <p class="c-section-brochure__text"><?php the_field('brochure_part_left_text')?></p>
       </div>
       <div class="col-md-6">
            <h1 class="c-section-brochure__title"><?php the_field('brochure_part_right_title')?>
            </h1>
            <div class="c-section-brochure__text"> 
                <?php the_field('brochure_form')?> 
            </div>
       </div>
    </div>
</div>
<!-- SECTION 3 OFF-->

<!-- SECTION 4 Galery ON -->
<div class="c-section-galery c-text container" id="galery">
     </div>
<!-- SECTION 4 OFF-->



<!-- SECTION 5 Accreditations ON -->
<div class="c-section-accreditations">
  <div class="container" id="accreditations">
      <div class="row">
          <div class="col-md-12 ">
             <img class="" src=" <?php the_field('accreditations_1') ?>"> 
          </div>
      </div>
  </div>
</div>
<!-- SECTION 5 OFF-->

<?php endwhile; ?>