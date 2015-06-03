<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>



<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link href='http://fonts.googleapis.com/css?family=Raleway:700,900,400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Fonts -->

<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- Google Analytics -->

<!-- Facebook -->
<script>
/*   window.fbAsyncInit = function() {
    FB.init({
      appId      : '488345084651474',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk')); */
</script>

</head>

<nav class="nav mostrar content" role="navigation" id="menu">
	<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'navbar-nav' , 'theme_location' => 'primary' ) ); ?>
</nav>

<header class="navbar-fixed-top">
    <div class="logo navbar-brand">
        <a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logotbocsmall.png" /></a>
    </div>
    <div class="navbar-header pull-right">
        <div class="high-bar" id="nav-display" >
            <span class="sr-only">Menú</span>
        </div>
    </div>
</header>



<script>
  jQuery( '#nav-display' ).click(function() {
    jQuery( '.nav' ).toggleClass( "mostrar" );
    jQuery( '.navbar-nav' ).toggleClass( "mostrar-b" );
});
</script>





