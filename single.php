 <?php get_header(); ?>

	
	<div id="sol" class="solacek padding10">	
		<a href="<?php the_permalink() ?>" class="yaziresim2"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else {echo '';}?></a>
		
		<div class="icerik">
					
					
			
			 <div class="temizle"></div>	
			
			
			<div class="konu ust10">
			<div class="icerikBaslik"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>	
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
			
			<div class="kpaylas">
					<p>Bu yazıyı paylaş :</p>
					<a href="http://www.facebook.com/share.php?u=<?php the_permalink() ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://twitter.com/share" target="_blank" data-url="<?php the_permalink() ?>"  data-lang="tr"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a href="whatsapp://send?text=<?php the_permalink();?>&t=<?php the_title(); ?>" data-action="share/whatsapp/share" target="blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
				</div>
			
			<div class="yazaralani">
				<div class="icbaslik"><h2><?php the_author(); ?> hakkında kısa bilgi</h2></div>
				<p class="authorpic"><?php echo  get_avatar( get_the_author_email(), '105' ); ?></p>
				<p class="authorcont"><?php  the_author_description(); ?></p>				
			</div><!--yazaralani-->	
			<div class="temizle"></div>
				


			
		</div><!--icerik-->
		
	<div class="temizle"></div>			
				 <?php comments_template(); ?>
	
	</div><!--sol-->

	

<?php get_footer(); ?>	