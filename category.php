<?php get_header(); ?>

<div id="sol" class="solacek mtop15">

		
		<div class="">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="yazi">
<div class="yazibaslik"><li><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></li></div>
<a href="<?php the_permalink() ?>" class="yaziresim"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else {echo '';}?></a>
<p><?php ozet(300)?></p>

				<li class="icerikYazar solacek"><i class="fa fa-user" aria-hidden="true"></i> <?php the_author() ?></li>
				<li class="icerikTarih solacek"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> <?php the_time('j F Y'); ?></li>
				<li class="icerikYorum solacek"><i class="fa fa-commenting" aria-hidden="true"></i> <?php comments_number('0 Yorum', '1 Yorum ', '% Yorum' );?></li>
				<li class="icerikOkunma solacek"><i class="fa fa-eye" aria-hidden="true"></i> <?php if(function_exists('the_views')) { the_views(); } ?></li>
				<a class="icerikTamam sagacek" href="<?php the_permalink() ?>">TAMAMI</a>
			
			<div class="temizle"></div>						

</div>
		

			<?php endwhile; else: ?>
			<?php endif; ?>
			
			
			
			
		</div><!--icerik-->
		<div class='wp-pagenavi' style="margin-bottom:10px;"> 
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>	</div>
			<div class="temizle"></div>

		
	</div><!--sol-->
	

<?php get_footer(); ?>	