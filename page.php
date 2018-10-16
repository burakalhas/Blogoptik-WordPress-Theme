<?php get_header(); ?>


	<div class="temizle"></div>
	
	<div id="sol" class="solacek">	
		
		
		<div class="icerik">
			<div class="singleBilgi">
				
						
			</div><!--icerikBilgi-->			
			
			 <div class="temizle"></div>	
			
			
			<div class="sayfa">	
			<div class="sayfaBaslik"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<p>				
				<?php the_content(); ?>

					<?php wp_link_pages(array('before' => '<p class="sayfalar"><strong>Sayfalar:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					<?php $trend = get_post_meta($post->ID,'trend', true);if($trend != "") {  ?>

					<?php }else{ ?><?php } ?><div class="temizle"></div>

					<?php $resim = get_post_meta($post->ID,'video', true);$yazi =  get_post_meta($post->ID,'normalvideo', true);if($resim != "") {  ?>

					<div class="video">	<center><script type='text/javascript' src='<?php bloginfo('template_url'); ?>/ext/js/jwplayer.js'></script><div id='mediaplayer'></div><script type="text/javascript">  jwplayer('mediaplayer').setup({    'flashplayer': '<?php bloginfo('template_url'); ?>/ext/js/player.swf',    'id': 'playerID',    'width': '540',    'height': '380',    'file': 'http://www.youtube.com/watch?v=<?php echo $resim; ?>',	'skin': '<?php bloginfo('template_url'); ?>/ext/js/bekle.zip',    'controlbar': 'bottom'  });</script></center></div>

					<?php } elseif($resim == "" && $yazi != "") { ?><div class="video"><center><?php echo $yazi; ?></center></div><?php }else{ ?><?php } ?><div class="temizle"></div>

				
				</p>
				
				<?php endwhile; else: ?>

		<?php endif; ?>

				
				
			</div><!--konu-->
			
			
			
			
			
			
			
		</div><!--icerik-->
		
	
	</div><!--sol-->

	

<?php get_footer(); ?>	