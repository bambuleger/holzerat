<?php
  /*
      Header Template
      @package holzerat
  */
$url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>

<head>
  <title><?php bloginfo('name'); wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <div class="container">
    <div class="row">
      <header class="col-xs-12">
        <div class="header-container text-center">
          <div class="header-content table">
            <div class="table-cell logo-container">
              <img class="logo" src="<?php echo $url; ?>/img/logo.png" height="140px" width="352px;">
            </div>
          </div>
          <div class="nav-container">
            <nav class="navbar navbar-default navbar-holzer">
              <?php
                wp_nav_menu( array(
                  'theme_location'  => 'primary_navigation',
                  'container'       => false,
                  'menu_class'      => 'nav navbar-nav',
                  'walker'          => new Holzer_Walker_Nav_Primary()
                ) );
              ?>
            </nav>
          </div>
          <div class="showcase-container">
            <div class="booking-box col-xs-4 col-xs-offset-1">
              <div class="table">
                <div class="booking-form table-cell">
                  BOOKING
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
  </div>
