 <div class="top-rail">
      <div class="inner">
          <nav class="menu">              
            <?php dynamic_sidebar('sidebar-toprail'); ?>
          </nav>   
          <div class="toprail-links hidden-sm-down">
            <a href="http://localhost:8888/Highschool/contact/" class="top-rail-links">Contact</a>
            <a href="http://atlaslanguageschool.com/" class="top-rail-links" target="blank">Atlas Language School</a>
          </div>
          <nav class="icons hidden-sm-down">
            <a href="https://www.facebook.com/atlas.language.school?fref=ts" target="blank">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="https://twitter.com/atlas_dublin" target="blank">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/company/atlas-language-school" target="blank">
              <i class="fa fa-linkedin"></i>
            </a>
            <a href="http://instagram.com/atlaslanguageschool?ref=badge" target="blank">
              <i class="fa fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/user/AtlasLanguageSchool" target="blank">
              <i class="fa fa-youtube-play"></i>
            </a>
          </nav>
        
      </div>
  </div>

<header class="banner js-nav-bar">
  <div class="container">
     <div class="c-navbar">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
          <img src="http://localhost:8888/atlas-logo.jpg" width="130" height="60">
        </a>
        <nav class="nav-primary">
          <?php if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(
                         ['theme_location'  => 'primary_navigation',
                          'menu_class'      => 'c-navbar__menu',]);
            endif;?>  

        </nav>
        <a href="http://localhost:8888/Highschool/enquire/" class="btn btn-primary btn-justified c-enquire" title="Enquire now"> ENQUIRE NOW</a>
    </div>
  </div>
</header>
