<?php
/*
Template Name: Somos
*/
?>
<?php get_header('content'); ?>

<div class="introcontent">
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1 single-container ">
                <h2><?php echo $post->post_title?></h2>
                <p><?php echo $post->post_content?></p>
            </div>
                 
    
        </div>
    </div>
</div>

<section>
	<div class="container-fluid">
		<div class="row">

			<?php $personales= get_posts(array('post_type' => 'personales', 'numberposts' => 3 )); ?>
            	<?php foreach ($personales as $personal): ?>
                

				<figure class="col-md-4 col-esp personas">
					
					<?php echo get_the_post_thumbnail( $personal->ID , 'personal', array('class' => 'img-responsive')) ?>
					<figcaption class="naming">
						<p><?php echo $personal->post_title ?></p>
					</figcaption>
					<figcaption class="profile">
						<h3><?php echo $personal->post_title ?></h3>
						<p><?php echo $personal->post_content ?></p>
						<ul class="prof-soc">
							<li><a href="<?php echo get_field('facebook', $personal->ID); ?>"><span class="fa fa-facebook fa-fw"></span></a></li>
							<li><a href="<?php echo get_field('twitter', $personal->ID); ?>"><span class="fa fa-twitter fa-fw"></span></a></li>
						</ul>
					</figcaption>
				</figure>
				<div class="separator hidden-sm hidden-lg hidden-xs hidden-md"></div>

				<?php endforeach ?>

		</div>
	</div>
</section>

<div class="separator hidden-sm hidden-lg hidden-xs hidden-md"></div>

<section class="upper">
    <div class="container">
        <div class="row bigcta">
            <div class="col-md-12">
                <a href="<?php echo get_page_link(67)?>">Trabaja con Nosotros</a>
                         
                <?php echo apply_filters('the_content' , $post->wp_count_posts)?>
            </div>  
        </div>
    </div>
</section>


<?php get_footer(); ?>