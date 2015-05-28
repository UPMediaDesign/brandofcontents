<?php get_header()?>

<main style="margin-top:4000px">
	<section>
    	<div class="container">
            <div class="row">
               <div class="col-sm-12 invite">
                  <?php $invitaciones = get_field('invitacion_sitio' , 'options')?>
                      <?php foreach($invitaciones as $invitacion):?>
                          <h1><?php echo $invitacion['titular']?></h1>
                          <p><?php echo $invitacion['parrafo']?></p>
                      <?php endforeach;?>
               </div>
            </div>
        </div>
    </section>
    
    <section class="redinitial">
    	<div class="container">
        	<div class="row">
                <div class="col-sm-6 pushed">
                	<h2>El resultado de <strong>nuestros principios</strong></h2>
                </div>

                <figure class="col-sm-6 number first">
                	<img src="<?php bloginfo('template_directory'); ?>/images/first-case.png" alt="">
                    <figcaption>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper eros in sem dignissim placerat. Morbi blandit orci sit amet lectus auctor scelerisque sit amet vel metus. Donec ex urna, pellentesque feugiat dictum in, cursus ac leo. Donec posuere massa sem, vel</p>
                    </figcaption>
              	</figure>
                
                <figure class="col-sm-6 number second">
                	<img src="<?php bloginfo('template_directory'); ?>/images/second-case.png" alt="">
                	<figcaption>
                  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper eros in sem dignissim placerat. Morbi blandit orci sit amet lectus auctor scelerisque sit amet vel metus. Donec ex urna, pellentesque feugiat dictum in, cursus ac leo. Donec posuere massa sem, vel</p>
                	</figcaption>
              	</figure>

				<figure class="col-sm-12 number third">
        			<img src="<?php bloginfo('template_directory'); ?>/images/third-case.png" alt="">
        			<figcaption>
          				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper eros in sem dignissim placerat. Morbi blandit orci sit amet lectus auctor scelerisque sit amet vel metus. Donec ex urna, pellentesque feugiat dictum in, cursus ac leo. Donec posuere massa sem, vel</p>
        			</figcaption>
      			</figure>
                
            </div>
        </div>
    </section>
</main>

<?php get_footer()?>

