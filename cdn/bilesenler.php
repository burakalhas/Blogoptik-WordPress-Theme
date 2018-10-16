<?php
add_action( 'widgets_init', 'bi3_sonyazi_widgets' );
function bi3_sonyazi_widgets() {
	register_widget( 'bi3_sonyazi_widget' );
}
class bi3_sonyazi_widget extends WP_Widget {
function bi3_sonyazi_widget() {
		/* Widget settings */		
		$widget_ops = array( 'classname' => 'widget_sonyazi', 'description' => __('Sitenize yapılan son 5 yorumu resimli olarak görüntüleyebilirsiniz.', 'bi3') );
		/* Create the widget */
		$this->WP_Widget( 'bi3_sonyazi_widget', __('Resimli Son Yorumlar Bileşeni', 'bi3'), $widget_ops );
	}
function widget( $args, $instance ) {
				?>
<div class="blok">
<div class="blokbaslik"><span><i class="fa fa-comments" aria-hidden="true"></i> Son Yorumlar</span></div>
<ul><br><?php resimli_son_yorumlar($args); ?></ul>		
</div>
        <?php
		echo $after_widget;
	}
function update( $new_instance, $old_instance ) {}
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
<p>Resimli son yorumları bu bu bileşen ile görüntüleyebilirsiniz.</p>
			<?php
	}
}
?>



<?php





add_action( 'widgets_init', 'bi3_reklam_widgets' );



function bi3_reklam_widgets() {

	register_widget( 'bi3_reklam_widget' );

}



class bi3_reklam_widget extends WP_Widget {



function bi3_reklam_widget() {

	

		/* Widget settings */

		$widget_ops = array( 'classname' => 'widget_reklam', 'description' => __('Reklamlarınızı bu bileşen ile görüntüleyebilirsiniz.', 'bi3') );



		/* Create the widget */

		$this->WP_Widget( 'bi3_reklam_widget', __('Reklam Bileşeni', 'bi3'), $widget_ops );

	}

	

function widget( $args, $instance ) {

			

	?>

<div class="blok">

			<div class="blokbaslik"><span><i class="fa fa-diamond" aria-hidden="true"></i>Sponsorlarım</span></div>

			<ul class="sagsponsor">

				<a class="sagreklam" href="<?php echo get_option('1reklamurl'); ?>"><img src="<?php echo get_option('1reklam'); ?>"/></a>

				<a class="sagreklam" href="<?php echo get_option('2reklamurl'); ?>"><img src="<?php echo get_option('2reklam'); ?>"/></a>

				<a class="sagreklam" href="<?php echo get_option('3reklamurl'); ?>"><img src="<?php echo get_option('3reklam'); ?>"/></a>

				<a class="sagreklam" href="<?php echo get_option('4reklamurl'); ?>"><img src="<?php echo get_option('4reklam'); ?>"/></a>

				<a class="sagreklam" href="<?php echo get_option('5reklamurl'); ?>"><img src="<?php echo get_option('5reklam'); ?>"/></a>

				<a class="sagreklam" href="<?php echo get_option('6reklamurl'); ?>"><img src="<?php echo get_option('6reklam'); ?>"/></a>





			</ul>

			<div class="temizle"></div>

		</div><!--blok-->

        <?php

		echo $after_widget;

	}

	

function update( $new_instance, $old_instance ) {}



	function form( $instance ) {

	

		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		

		<p>

			Tema panelinden bu bileşeni düzenleyebilirsiniz.

		</p>

		

	<?php

	}

}



?>



<?php



add_action( 'widgets_init', 'bi3_ciftsutun_widgets' );



function bi3_ciftsutun_widgets() {

	register_widget( 'bi3_ciftsutun_widget' );

}



class bi3_ciftsutun_widget extends WP_Widget {



function bi3_ciftsutun_widget() {

	

		/* Widget settings */

		$widget_ops = array( 'classname' => 'widget_ciftsutun', 'description' => __('Bu bileşen ile kategorileri çift sütun halinde gösterebilirsiniz.', 'bi3') );



		/* Create the widget */

		$this->WP_Widget( 'bi3_ciftsutun_widget', __('Kategori Bileşeni', 'bi3'), $widget_ops );

	}

	

function widget( $args, $instance ) {

			

	?>

		<div class="blok">

			<div class="blokbaslik"><span><i class="fa fa-bars" aria-hidden="true"></i> Kategoriler</span></div>

			<ul class="yanyana">

				<?php wp_list_categories('title_li='); ?>

			</ul>

			

			<div class="temizle"></div>

		</div><!--blok-->	

        <?php

		echo $after_widget;

	}

	

function update( $new_instance, $old_instance ) {}



	function form( $instance ) {

	

		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		

		<p>

			Bileşenin Ayalarını Tema Panelinden Yapınız!

		</p>

		

	<?php

	}

}



?>



<?php 



add_action( 'widgets_init', 'bi3_rkategori_widgets' ); 

  

function bi3_rkategori_widgets() { 

 register_widget( 'bi3_rkategori_widget' ); 

} 

  

class bi3_rkategori_widget extends WP_Widget { 

  

function bi3_rkategori_widget() { 

  

 /* Widget settings */ 

 $widget_ops = array( 'classname' => 'widget_sosyal', 'description' => __('Bu Bileşen ile renkli kategorileri yayınlayabilirsiniz.', 'bi3') ); 

  

/* Create the widget */ 

 $this->WP_Widget( 'bi3_rkategori_widget', __('Renkli Kategori Bileşeni', 'bi3'), $widget_ops ); 

 } 

  

function widget( $args, $instance ) { 

  

 ?> 

    	<div id="renklimenu" class="blok">


					<ul>

						<li><a href="<?php echo get_option('wordpressa'); ?>" class="wp-cat">TASARIM</a></li>

						<li><a href="<?php echo get_option('cssa'); ?>" class="cssnot">MİNİ'NOTLAR</a></li>

						<li><a href="<?php echo get_option('kisisela'); ?>" class="webcat">DÜNYA'DAN</a></li>

						<li><a href="<?php echo get_option('videolara'); ?>" class="videoc">VİDEOLAR</a></li>

						<li><a href="<?php echo get_option('muziklera'); ?>" class="muzikc">MÜZİKLER</a></li>

						<li><a href="<?php echo get_option('genela'); ?>" class="guncelc">BLOGOPTİK'DEN</a></li>

					</ul>

				</section>

				</div>

				<br>

 <?php 

 echo $after_widget; 

 } 

  

function update( $new_instance, $old_instance ) {} 

  

function form( $instance ) { 

  

 $instance = wp_parse_args( (array) $instance, $defaults ); ?> 

  

 <p> 

 Bileşenin Ayalarını Tema Panelinden Yapınız! 

 </p> 

  

	<?php

	}

}
?>



<?php 



add_action( 'widgets_init', 'bi3_sonyazdiklarim_widgets' ); 

  

function bi3_sonyazdiklarim_widgets() { 

 register_widget( 'bi3_sonyazdiklarim_widget' ); 

} 

  

class bi3_sonyazdiklarim_widget extends WP_Widget { 

  

function bi3_sonyazdiklarim_widget() { 

  

 /* Widget settings */ 

 $widget_ops = array( 'classname' => 'widget_sosyal', 'description' => __('Bu Bileşen ile sosyal pforillerinizi yayınlayabilirsiniz.', 'bi3') ); 

  

/* Create the widget */ 

 $this->WP_Widget( 'bi3_sonyazdiklarim_widget', __('Son Yazdıklarım Bileşeni', 'bi3'), $widget_ops ); 

 } 

  

function widget( $args, $instance ) { 

  

 ?> 

    			<div class="blok">

<div class="blokbaslik"><span><i class="fa fa-bullhorn" aria-hidden="true"></i> Son Yazdıklarım</span></div>

<ul class="sonyazi">

<?php query_posts('showposts=7');  while ( have_posts() ) : the_post(); ?>

<li> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>	

	

		 <?php endwhile; ?>

</div>	

 <?php 

 echo $after_widget; 

 } 

  

function update( $new_instance, $old_instance ) {} 

  

function form( $instance ) { 

  

 $instance = wp_parse_args( (array) $instance, $defaults ); ?> 

  

 <p> 

 Bileşenin Ayalarını Tema Panelinden Yapınız! 

 </p> 

  

 <?php 

 } 

} 

  

?>



<?php 



add_action( 'widgets_init', 'bi3_social_widgets' ); 

  

function bi3_social_widgets() { 

 register_widget( 'bi3_social_widget' ); 

} 

  

class bi3_social_widget extends WP_Widget { 

  

function bi3_social_widget() { 

  

 /* Widget settings */ 

 $widget_ops = array( 'classname' => 'widget_social', 'description' => __('Bu Bileşen ile sosyal profillerinizi yayınlayabilirsiniz.', 'bi3') ); 

  

/* Create the widget */ 

 $this->WP_Widget( 'bi3_social_widget', __('Sosyal Ağlar Bileşeni', 'bi3'), $widget_ops ); 

 } 

  

function widget( $args, $instance ) { 

  

 ?> 

   	<div class="socialblok">
	
		<a target="_blank" rel="nofollow" href="http://www.facebook.com/<?php echo get_option('facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a target="_blank" rel="nofollow" href="https://twitter.com/<?php echo get_option('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a target="_blank" rel="nofollow" href="http://gplus.to/<?php echo get_option('google'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		<a target="_blank" rel="nofollow" href="http://www.youtube.com/<?php echo get_option('youtube'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
		<a target="_blank" rel="nofollow" href="http://be.net/<?php echo get_option('behance'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
		<a target="_blank" rel="nofollow" href="<?php echo get_option('rss'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
		<a target="_blank" rel="nofollow" href="#<?php echo get_option('skype'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a>
		<a target="_blank" rel="nofollow" href="http://instagram.com/<?php echo get_option('instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>

	</div>

 <?php 

 echo $after_widget; 

 } 

  

function update( $new_instance, $old_instance ) {} 

  

function form( $instance ) { 

  

 $instance = wp_parse_args( (array) $instance, $defaults ); ?> 

  

 <p> 

 Bileşenin Ayalarını Tema Panelinden Yapınız! 

 </p> 

  

 <?php 

 } 

} 

  

?>



<?php 



  

add_action( 'widgets_init', 'bi3_arama_widgets' ); 

  

function bi3_arama_widgets() { 

 register_widget( 'bi3_arama_widget' ); 

} 

  

class bi3_arama_widget extends WP_Widget { 

  

function bi3_arama_widget() { 

  

 /* Widget settings */ 

 $widget_ops = array( 'classname' => 'widget_arama', 'description' => __('Bu Bileşen ile arama formunu görüntüleyebilirsiniz.', 'bi3') ); 

  

/* Create the widget */ 

 $this->WP_Widget( 'bi3_arama_widget', __('Arama Bileşeni', 'bi3'), $widget_ops ); 

 } 

  

function widget( $args, $instance ) { 

  

 ?> 

 <form role="search" method="get" id="searchform" action="<?php echo get_option('aramayap'); ?>">

    		<input type="text" value="" name="s" id="s" class="sidearama" placeholder="<?php echo get_option('aramametni'); ?>" />

</form>

	

<br>

 <?php 

 echo $after_widget; 

 } 

  

function update( $new_instance, $old_instance ) {} 

  

function form( $instance ) { 

  

 $instance = wp_parse_args( (array) $instance, $defaults ); ?> 

  

 <p> 

 Bileşenin Ayalarını Tema Panelinden Yapınız! 

 </p> 

  

 <?php 

 } 

} 

  

?>



<?php 



  

add_action( 'widgets_init', 'bi3_arsiv_widgets' ); 

  

function bi3_arsiv_widgets() { 

 register_widget( 'bi3_arsiv_widget' ); 

} 

  

class bi3_arsiv_widget extends WP_Widget { 

  

function bi3_arsiv_widget() { 

  

 /* Widget settings */ 

 $widget_ops = array( 'classname' => 'widget_arsiv', 'description' => __('Bu Bileşen ile aylık arşivleri görüntüleyebilirsiniz.', 'bi3') ); 

  

/* Create the widget */ 

 $this->WP_Widget( 'bi3_arsiv_widget', __('Arşivler Bileşeni', 'bi3'), $widget_ops ); 

 } 

  

function widget( $args, $instance ) { 

  

 ?> 



		<div class="blok">

			<div class="blokbaslik"><span><i class="fa fa-archive" aria-hidden="true"></i> Aylık Arşivim</span></div>

			<ul class="yanyana">

		 <?php wp_get_archives('type=monthly'); ?>



	</ul>

			

			<div class="temizle"></div>

		</div><!--blok-->

 <?php 

 echo $after_widget; 

 } 

  

function update( $new_instance, $old_instance ) {} 

  

function form( $instance ) { 

  

 $instance = wp_parse_args( (array) $instance, $defaults ); ?> 

  

 <p> 

 Bileşenin Ayalarını Tema Panelinden Yapınız! 

 </p> 

  

 <?php 

 } 

} 

  

?>



<?php 



  

add_action( 'widgets_init', 'bi3_sponsor_widgets' ); 

  

function bi3_sponsor_widgets() { 

 register_widget( 'bi3_sponsor_widget' ); 

} 

  

class bi3_sponsor_widget extends WP_Widget { 

  

function bi3_sponsor_widget() { 

  

 /* Widget settings */ 

 $widget_ops = array( 'classname' => 'widget_sponsor', 'description' => __('Bu Bileşen ile sitenizde ki sponsor kategorisini yan menüde yayınlayabilirsiniz.', 'bi3') ); 

  

/* Create the widget */ 

 $this->WP_Widget( 'bi3_sponsor_widget', __('Sponsor Konular Bileşeni', 'bi3'), $widget_ops ); 

 } 

  

function widget( $args, $instance ) { 

  

 ?> 



<div class="blok">

			<div class="blokbaslik"><span><i class="fa fa-google-wallet" aria-hidden="true"></i> Sponsor Konular</span></div>

			<ul class="teksira">

			<?php $anarschi = new WP_Query("showposts=5&cat=1"); while($anarschi->have_posts()) : $anarschi->the_post();?>

<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

				<?php endwhile; ?>



	</ul>

			

			<div class="temizle"></div>

		</div><!--blok-->

 <?php 

 echo $after_widget; 

 } 

  

function update( $new_instance, $old_instance ) {} 

  

function form( $instance ) { 

  

 $instance = wp_parse_args( (array) $instance, $defaults ); ?> 

  

 <p> 

 Bileşenin Ayalarını Tema Panelinden Yapınız! 

 </p> 

  

 <?php 

 } 

} 

  

?>