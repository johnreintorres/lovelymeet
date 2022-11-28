<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <script src="https://kit.fontawesome.com/d6c8aac0cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/scss/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/scss-2/style.css" />

    <title>Lovelymeet</title>
    <?php wp_head();?>
</head>

<body>
<?php
if ( is_user_logged_in() ) {
    echo '<style>
    .dating-tab{
        display: block;
      }
      .login{
        display: none;
      }
      .register{
        display: none;
      }
      .logout{
        display: block;
      }
      .filter-btn.filter-field-form-grp.filter-field-form-submit-field{
        display: block;
        display: flex;
      }
      </style>';
} else {
    echo '<style>
    .dating-tab{
        display: none;
      }
      .login{
        display: block;
      }
      .register{
        display: block;
      }
      .logout{
        display: none;
      }
      .filter-btn.filter-field-form-grp.filter-field-form-submit-field{
        display: none;
      }
      </style>';
}
?>
    <nav class="nav-pc">
        <div class="nav-area">
            <div class="nav-container">
                <div class="nav-img-container">
                    <a href="<?php echo site_url();?>/"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_nav.png" alt="" /></a>
                </div>
                <div class="nav-links">
                    <ul>
                        <li><a href="<?php echo site_url();?>/">Home</a></li>
                        <li class="dating-tab"><a href="<?php echo site_url();?>/dating">Dating</a></li>
						<!--  <li class=""><a href="<?php echo site_url();?>/schedule">Booking</a></li> -->
              <!-- <li><a href="<?php echo site_url();?>/model">Models</a></li> -->

                        <!-- <li><a href="<?php echo site_url();?>/about">About</a></li> -->
                        <li><a href="<?php echo site_url();?>/blogs">Blogs</a></li>
<!--                         <li><a href="<?php echo site_url();?>/gallery">Gallery</a></li> -->
                        <li><a href="<?php echo site_url();?>/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-login">
                    <ul>
                        <li class="login"><a href="<?php echo site_url();?>/log-in">Login</a></li>
                        <li class="register"><a href="<?php echo site_url();?>/register">Register</a></li>
                        <li class="logout"><a href="<?php echo site_url();?>/wp-login.php?action=logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <nav class="nav-sp">
        <ul class="nav-sp-container">
            <li class="nav-sp-item"><a href="<?php echo site_url();?>/" class="nav-sp-link">Home</a></li>
            <li class="nav-sp-item"><a href="<?php echo site_url();?>/dating" class="nav-sp-link">Dating</a></li>
			            <!-- <li class="nav-sp-item"><a href="<?php echo site_url();?>/schedule" class="nav-sp-link">Booking</a></li> -->

            <!-- <li class="nav-sp-item"><a href="<?php echo site_url();?>/about" class="nav-sp-link">About</a></li> -->
            <li class="nav-sp-item"><a href="<?php echo site_url();?>/blogs" class="nav-sp-link">Blogs</a></li>
<!--             <li class="nav-sp-item"><a href="<?php echo site_url();?>/gallery" class="nav-sp-link">Gallery</a></li> -->
            <li class="nav-sp-item"><a href="<?php echo site_url();?>/contact" class="nav-sp-link">Contact</a></li>
            <li class="nav-sp-item login"><a href="<?php echo site_url();?>/log-in">Login</a></li>
            <li class="nav-sp-item register"><a href="<?php echo site_url();?>/register">Register</a></li>
            <li class="nav-sp-item logout"><a href="<?php echo site_url();?>/wp-login.php?action=logout">Logout</a></li>

        </ul>
    </nav>
    <div class="menu-btn-area">
     <div class="menu-btn-area">
    <div class="menu-btn">
        <span class="menu-btn-burger"></span>
    </div>
    </div>
    </div>