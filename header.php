<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scifi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="/science/wp-content/themes/scifi/js/index.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Orbitron" rel="stylesheet">
    <script src="https://use.fontawesome.com/b7c4dc27ca.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


 <header class="centered-navigation" role="banner">
  <div class="centered-navigation-wrapper">
    <a href="javascript:void(0)" class="mobile-logo">
      <img src="http://localhost:8888/science/wp-content/uploads/2017/08/spaceship.png" alt="Logo image">
    </a>
    <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
    <nav role="navigation">
      <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">

        <li class="nav-link"><a href="http://localhost:8888/science/">Home</a></li>


        <li class="nav-link"><a href="http://localhost:8888/science/podcast/">Podcast</a></li>


        <li class="nav-link"><a href="http://localhost:8888/science/live/">Live</a></li>


        <li class="nav-link logo">
        
          <a href="javascript:void(0)" class="logo">
            <img src="http://localhost:8888/science/wp-content/uploads/2017/08/spaceship.png" alt="Logo image">
          </a>
        </li>
        <li id="js-centered-more" class="nav-link more"><a href="http://localhost:8888/science/reviews/">Reviews</a>
          <ul class="submenu">
          <li><a href="http://localhost:8888/science/reviews/">Top News <i class="fa fa-newspaper-o" aria-hidden="true"></i></a></li>

            <li><a href="http://localhost:8888/science/reviews/entertainment/">Entertainment<i class="fa fa-laptop" aria-hidden="true"></i></a></li>

            <li><a href="http://localhost:8888/science/reviews/writing/">Writing <i class="fa fa-book" aria-hidden="true"></i></a></li>

            <li><a href="http://localhost:8888/science/reviews/technology/">Technology <i class="fa fa-rocket" aria-hidden="true"></i></a></li>

            <li><a href="http://localhost:8888/science/reviews/tabletop/">Tabletop <i class="fa fa-pencil" aria-hidden="true"></i></a>
            </li>

            <li class="more"><a href="http://localhost:8888/science/reviews/collectibles/">Collectibles <i class="fa fa-usd" aria-hidden="true"></i></a>

              <ul class="submenu fly-out-right">

                <li><a href="http://localhost:8888/science/reviews/collectibles/miniatures/">Miniatures</a></li>

                <li><a href="http://localhost:8888/science/reviews/collectibles/trading-cards/">Trading Cards</a></li>

                <li><a href="http://localhost:8888/science/reviews/collectibles/models/">Models</a></li>

              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-link"><a href="http://localhost:8888/science/newsletter/">Signup</a></li>
      </ul>
    </nav>
  </div>
</header>
	<div id="content" class="site-content">
