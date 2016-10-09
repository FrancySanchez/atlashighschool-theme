<?php
/**
 * Template Name: Why Atlas
 */

$data = Timber::get_context();
// $data['page'] = Timber::get_post();
$data['acfs'] = get_fields();
Timber::render('twigs/panel-builder.twig', $data);

?>

<?php while (have_posts()) : the_post(); ?>

  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

<!-- SECTION MAIN WHY ATLAS ON -->
<div class="c-section-hero" style="background-image: url(<?php the_field('main_hero_photo') ?>)" id="whyatlas">
     <div class="container">
      	<div class="row">
      	</div>
      </div>
  </div>
<!-- SECTION MAIN OFF-->

<!-- SECTION TEXT ON -->
<div class="c-section-content c-text container" id="whyatlasinfo">
    <div class="row">
      	<div class="col-md-12 ">
          <p class="big-title"> <?php the_field('main_title')?></p>
          <p class="c-section-content__text"><?php the_field('main_text')?></p>
       	</div>
    </div>
  </div>
<!-- SECTION 1 OFF-->

<!-- SECTION TEAM ON -->
<div class="c-section-team c-text container" id="whyatlasinfo">
    <div class="row">
        <div class="col-md-12 ">
          <p class="subtitle">OUR TEAM</p>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <img class="team_img" src="<?php the_field('team_1_imag') ?>">
            </div>
            <div class="col-md-6 ">
                <p class="team_name"> <?php the_field('team_1_name') ?></p>
                <p class="team_position"><?php the_field('team_1_position') ?></p>
                <p class="team_description"><?php the_field('team_1_description') ?></p>
          </div>
        </div>
         <div class="row">
            <div class="col-md-3 ">
                <img class="team_img" src="<?php the_field('team_2_imag') ?>">
            </div>
            <div class="col-md-3 ">
                <p class="team_name"> <?php the_field('team_2_name') ?></p>
                <p class="team_position"><?php the_field('team_2_position') ?></p>
                <p class="team_description"><?php the_field('team_2_description') ?></p>
          </div>
            <div class="col-md-3 ">
                <img class="team_img" src="<?php the_field('team_3_imag') ?>">
            </div>
          <div class="col-md-3 ">
                <p class="team_name"> <?php the_field('team_3_name') ?></p>
                <p class="team_position"><?php the_field('team_3_position') ?></p>
                <p class="team_description"><?php the_field('team_3_description') ?></p>
          </div>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <img class="team_img" src="<?php the_field('team_4_imag') ?>">
                <p class="team_name"> <?php the_field('team_4_name') ?></p>
                <p class="team_position"><?php the_field('team_4_position') ?></p>
                <p class="team_description"><?php the_field('team_4_description') ?></p>
            </div>
            <div class="col-md-3 ">
                <img class="team_img" src="<?php the_field('team_5_imag') ?>">
                <p class="team_name"> <?php the_field('team_5_name') ?></p>
                <p class="team_position"><?php the_field('team_5_position') ?></p>
                <p class="team_description"><?php the_field('team_5_description') ?></p>
            </div>
            <div class="col-md-3 ">
                <img class="team_img" src="<?php the_field('team_6_imag') ?>">
                <p class="team_name"> <?php the_field('team_6_name') ?></p>
                <p class="team_position"><?php the_field('team_6_position') ?></p>
                <p class="team_description"><?php the_field('team_6_description') ?></p>
            </div>
            <div class="col-md-3 ">
                <img class="team_img" src="<?php the_field('team_7_imag') ?>">
                <p class="team_name"> <?php the_field('team_7_name') ?></p>
                <p class="team_position"><?php the_field('team_7_position') ?></p>
                <p class="team_description"><?php the_field('team_7_description') ?></p>
            </div>
        </div>
    </div>
  </div>
<!-- SECTION 1 OFF-->



<div id="whyatlasinfo" class="c-section-team c-text container">
     <div class="row">
    <div class="col-md-3 ">
    <img class="team_img" src="http://localhost:8888/Highschool/wp-content/uploads/2016/09/alan.png" alt="alan" width="203" height="205" />
<div class="col-md-3 ">
<p class="team_name">Alan Brennan</p>
<p class="team_position">School Director</p>
<p class="team_description">Alan is one of the directors of Atlas and oversees the operations of all our High School Placement Programmes.</p>

</div>
</div>
<div class="row">
<div class="col-md-3 "><img class="team_img" src="http://localhost:8888/Highschool/wp-content/uploads/2016/09/Screen-Shot-2016-10-04-at-16.17.55.png" alt="screen-shot-2016-10-04-at-16-17-55" width="205" height="205" /></div>
<div class="col-md-3 ">
<p class="team_name">Arthur Godsil</p>
<p class="team_position">Programme Director</p>
<p class="team_description">Arthur is our Programme Director. He has vast experience of the Irish education system and is well known and respected within the Irish education sector.</p>

</div>
<div class="col-md-3 "><img class="team_img" src="http://localhost:8888/Highschool/wp-content/uploads/2016/09/Screen-Shot-2016-10-04-at-16.18.01.png" alt="screen-shot-2016-10-04-at-16-18-01" width="205" height="203" /></div>
<div class="col-md-3 ">
<p class="team_name">Emma Godsil</p>
<p class="team_position">Lead Welfare O cer</p>
<p class="team_description">Emma has extensive experience dealing with students and is our Lead Welfare Officer and is the main point of contact for students a er they arrive in Ireland.</p>
</div>
</div>

  <div class="row">
            <div class="col-md-3 ">
                <img class="team_img" src="http://localhost:8888/Highschool/wp-content/uploads/2016/09/Screen-Shot-2016-10-04-at-16.18.01.png" alt="screen-shot-2016-10-04-at-16-18-01" width="205" height="203" /></div>
                <p class="team_name">Kathi Gerth</p>
                <p class="team_position">Marketing Manager</p>
                <p class="team_description">Kathi deals with our European markets and is here to help with any ques ons you have about our schools and programmes.</p>
            </div>
            <div class="col-md-3 ">
                <img class="team_img" src="http://localhost:8888/Highschool/wp-content/uploads/2016/09/alan.png" alt="alan" width="203" height="205"/></div>
                <p class="team_name">Paul McMahon</p>
                <p class="team_position">Marketing Manager Spain and La n America</p>
                <p class="team_description">Paul deals with our Spanish speaking markets and can provide further informa on about the High School Programmes and any other courses at Atlas Language School.</p>
            </div>
            <div class="col-md-3 ">
                <img class="team_img" src="http://localhost:8888/Highschool/wp-content/uploads/2016/09/Screen-Shot-2016-10-04-at-16.18.01.png" alt="screen-shot-2016-10-04-at-16-18-01" width="205" height="203" /></div>
                <p class="team_name">Shimpei Takashima</p>
                <p class="team_position">Marketing Manager Japan</p>
                <p class="team_description">He can answer your questions about our programmes and helps our students from Japan setle into life in Ireland.</p>
            </div>
            <div class="col-md-3 ">
                <img class="team_img" src="http://localhost:8888/Highschool/wp-content/uploads/2016/09/Screen-Shot-2016-10-04-at-16.18.01.png" alt="screen-shot-2016-10-04-at-16-18-01" width="205" height="203" /></div>
                <p class="team_name"> Matteo La Manna </p>
                <p class="team_position">Marketing Manager Italy</p>
                <p class="team_description">He can give you further details about the High School Programmes and answer any ques ons regarding the courses at Atlas.</p>
            </div>
        </div>



</div>







  
<?php endwhile; ?>