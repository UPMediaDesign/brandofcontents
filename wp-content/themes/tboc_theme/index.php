<?php get_header()?>

<video id="v0" tabindex="0" autobuffer="autobuffer" preload="preload">
      <source type="video/webm; codecs=&quot;vp8, vorbis&quot;" src="http://www.html5rocks.com/tutorials/video/basics/Chrome_ImF.webm"></source>
      <source type="video/ogg; codecs=&quot;theora, vorbis&quot;" src="http://www.html5rocks.com/tutorials/video/basics/Chrome_ImF.ogv"></source>
      <source type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;" src="http://www.html5rocks.com/tutorials/video/basics/Chrome_ImF.mp4"></source>
      <p>Sorry, your browser does not support the &lt;video&gt; element.</p>
</video>


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
        	<div class="row masonry-container">

                <div class="col-md-6 col-sm-12 pushed">
                	<h2>El resultado de <br/>
                    <strong>nuestros principios</strong></h2>
                </div>

                <!-- Columnas Casos | Clientes  -->
                <?php $clientes= get_posts(array('post_type' => 'clientes', 'numberposts' => 3 , 'casos' => 'destacado')); ?>
                    <?php $countclientes = 0 ?>
                    <?php foreach ($clientes as $cliente): ?>
                    <?php $countclientes++ ?>

                    <?php if ($countclientes == 1){
                      $col = 'col-md-6';
                    $class = 'col-md-6 col-sm-4 number first item';
                    }

                    elseif ($countclientes == 2){
                      $col = 'col-md-7';
                    $class = 'col-md-6 col-sm-4 number second item';
                      }

                      else{
                      $col = 'col-md-12';
                    $class = 'col-md-12 col-sm-4 number third item';
                    } 

                      
                      ?>

                    <figure class="<?php echo $class ?>">
                            <a href="<?php echo get_permalink($cliente->ID)?>"><?php echo get_the_post_thumbnail( $cliente->ID , $col, array('class' => 'img-responsive desktop')) ?></a>
              
                            <figcaption>
                              <span>0<?php echo $countclientes ?></span>
                                <h3><a href="<?php echo get_permalink($cliente->ID) ?>" title="<?php echo $cliente->post_title ?>" rel="blog"><?php echo $cliente->post_title ?></a></h3>
                                <p><?php echo $cliente->post_excerpt;?>...</p>
                            </figcaption>
                    </figure>
   
                          
                  <?php endforeach ?>
                
            </div>
            <div class="more">
              <a href="<?php echo get_page_link(4)?>" title="Ver más" rel=""><img src="<?php bloginfo('template_directory'); ?>/images/more.png" alt="">Load More</a>
            </div>
                    
        </div>
    </section>

    <section class="white">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 white-invite">
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut lobortis mi. Donec consectetur, eros id elementum</h3>
            <a href="<?php echo get_page_link(8)?>">Ir a Somos</a>
          </div>
        </div>
      </div>
      
    </section>



<?php get_footer()?>

