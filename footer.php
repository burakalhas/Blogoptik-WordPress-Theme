	<?php get_sidebar(); ?>
	
	
	
	
	</div><!--orta-->
	</div>
	
	 <div class="temizle"></div>	

	
 <div class="temizle"></div>

<div id="footer">
	<div class="dikeykafali">
	
		<div class="solacek fsosyal">
			<a target="_blank" rel="nofollow" href="http://www.facebook.com/<?php echo get_option('facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a target="_blank" rel="nofollow" href="https://twitter.com/<?php echo get_option('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a target="_blank" rel="nofollow" href="http://gplus.to/<?php echo get_option('google'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			<a target="_blank" rel="nofollow" href="http://www.youtube.com/<?php echo get_option('youtube'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			<a target="_blank" rel="nofollow" href="http://be.net/<?php echo get_option('behance'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
			<a target="_blank" rel="nofollow" href="<?php echo get_option('rss'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
			<a target="_blank" rel="nofollow" href="#<?php echo get_option('skype'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a>
			<a target="_blank" rel="nofollow" href="http://instagram.com/<?php echo get_option('instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>	
		<div class="footmenu">
			<li><a href="<?php bloginfo('url'); ?>"> Ana Sayfa</a></li>
			<li><a href="<?php bloginfo('url'); ?>/hakkimda"> Hakkımda</a></li>
			<li><a href="<?php bloginfo('url'); ?>/iletisim"> iletişim</a></li>
			<li><a href="<?php bloginfo('url'); ?>/reklam-ver"> Reklam Ver</a></li>
		</div>
		<div class="fblok">
			<div class="fbaslik">HAKKIMIZDA</div>
			<p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.</p>
		</div>
		<div class="fblok">
			<div class="fbaslik">SON TWİTLERİM</div>
			<p><a class="twitter-timeline" href="https://twitter.com/blogoptik">@blogoptik twitleri! </a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></p>
		</div>
		<div class="fblok">
			<div class="fbaslik">SPONSORLAR</div>
				<div class="ic">
				<li><a href="#burakalhas">BURAK ALHAS</a></li>
				<li><a href="#burakalhas">BURAK ALHAS</a></li>
				<li><a href="#burakalhas">BURAK ALHAS</a></li>
				<li><a href="#burakalhas">BURAK ALHAS</a></li>
				<a href="http://www.turhost.com/"><img src="<?php bloginfo('template_url'); ?>/img/turhost.png"></a>
				</div>
		</div>
	</div><!--dikeykafali-->
		
</div><!--sagdayiz-->

	<?php wp_footer(); ?>
</body>
</html>