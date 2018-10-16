<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr-TR"><head profile="http://gmpg.org/xfn/11">	
<head>	
<meta charset="<?php bloginfo( 'charset' ); ?>" />	
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?>   <?php } ?> <?php wp_title(); ?>  </title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>	
<link href='https://fonts.googleapis.com/css?family=Exo+2:400,300,100italic,100,200,200italic,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<link href="<?php bloginfo('template_url'); ?>/css/<?php $renk = get_option ('minnimallize_temarengi'); echo $renk ? $renk : "mavi";?>.css" rel="stylesheet" type="text/css" />	
<script src="<?php bloginfo('template_url'); ?>/cdn/cufon/cufon-yui.js" type="text/javascript"></script>	
<script src="<?php bloginfo('template_url'); ?>/cdn/cufon/font.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">Cufon.replace('.konu h1 , .videobaslik h2 a , .sayfaBaslik , .konu h2 , .konu h3 , .konu h4 , .menu , .icerikBaslik  , .blokbaslik , .icbaslik , .benzery ul li h2 , .dinlediklerim h2 , .izlediklerim h2 , .fotoblog h2 , h1.arsivbaslik', {hover: true});</script>
<?php wp_head(); ?>
</head>
<body>
<div id="header">
<div class="menu ust10">
<div class="head">
<a class="logo animated fadeInLeftBig" href="<?php bloginfo('url'); ?>"></a>	
	<ul class="animated fadeInRightBig">
	<li><a href="<?php bloginfo('url'); ?>">Anasayfa<span>ana gibi</span></a></li>						
	<li><a href="<?php bloginfo('url'); ?>/hakkimda">Hakkımda<span>beni tanı</span></a></li>
	<li><a href="<?php bloginfo('url'); ?>/iletisim">İletişim<span>bana ulaş</span></a></li>
	<li><a href="<?php bloginfo('url'); ?>/reklam-ver">Reklam Ver<span>para $$$</span></a></li>
	</ul>
	<div class="temizle"></div>
</div>
<div class="temizle"></div>   
</div>
<div class="menu2">
	<div id="container">
		<li><a href="http://www.blogoptik.com/category/tasarim/">Tasarım</a></li>
		<li><a href="http://www.blogoptik.com/category/teknoloji/">Teknoloji</a></li>
		<li><a href="http://www.blogoptik.com/category/dunyadan/">Dünya'dan</a></li>
		<li><a href="http://www.blogoptik.com/category/program/">Program</a></li>
		<li><a href="http://www.blogoptik.com/category/mininotlar/">Mini'notlar</a></li>
		<li><a href="http://www.blogoptik.com/category/blogoptikden/">Blogoptik'den</a></li>
		<form role="search" method="get" id="searchform" action="<?php echo get_option('aramayap'); ?>">

    		<input type="text" value="" name="s" id="s" class="headarama" placeholder="yaz ve enter'la..." />

		</form>
	</div>
</div>
<div id="container">	
<div class="temizle"></div>			
</div>
<div class="temizle"></div>	
<div id="orta" class="toplagel">

<div class="uyari">Arkadaşlar merhaba,<b>Blogoptik.com</b> açıldı açılmasına fakat bir sürü eksiğimiz var tasarımsal açıdan. Bu konuda bizlere yardımcı olmanızı isteriz. Tasarımda gördüğünüz eksiklikleri, göz zevkini bozan kısımları bize <b><a href="mailto:info@blogoptik.com">info@blogoptik.com</a></b> mail adresinden iletebilirseniz çok memnun oluruz.</div>