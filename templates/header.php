<header class="banner navbar navbar-default navbar-fixed-top" role="banner">

  <div class="container">
  <div class="logo"><img src="/Wordpress/wp-content/themes/nons_roots/assets/img/CITL-web.png">    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
    </div>

</div>
  <div class="all-nav">
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
    </div>
  </div>
</header>
