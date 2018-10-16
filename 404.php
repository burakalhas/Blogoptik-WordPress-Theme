<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr-TR"><head profile="http://gmpg.org/xfn/11">	
<head>	
<meta charset="<?php bloginfo( 'charset' ); ?>" />	
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?>   <?php } ?> <?php wp_title(); ?>  </title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>	
<link href='https://fonts.googleapis.com/css?family=Exo+2:400,300,100italic,100,200,200italic,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<link href="<?php bloginfo('template_url'); ?>/css/404.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<?php wp_head(); ?>
</head>
<body>

<div class="hata">
			
	<div class="baslik">Sonuçlar Kötü!</div>
	<li class="bir"><b><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>Her yeri aradık. </li>
	<li class="iki"><b><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>Köşedeki bakkala sorduk. </li>
	<li class="uc"><b><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>Tüpçünün karşısındaki ayakkabı boyacısına bile sorduk.. </li>
	<li class="dort"><b><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>Ama bulamadık.. </li>
	<li class="bes"><b><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>O yüzden <a href="<?php bloginfo('home'); ?>">buraya</a> tıklayarak anasayfaya gidebilirsin..</li>
	<center><h2>..ya da tekrar arayabilirsin...</h2><br>
		<form role="search" method="get" id="searchform" action="<?php echo get_option('aramayap'); ?>">
			<input type="text" value="" name="s" id="s" class="hatarama" placeholder="YAZ VE ENTER'A BAS" />
		</form>
	</center>
	
</div>
		

