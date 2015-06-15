<?php get_header('content'); ?>
		
    <div class="introcontent">
        <div class="container">
            <div class="row">

                <div class="col-md-10 col-md-offset-1 single-container ">
                    <h2><?php $cliente6 = get_post(6); echo $cliente6->post_title; ?></h2>
                    <p><?php echo $cliente6->post_content; ?></p>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container-fluid encabezado">
         <div class="row">
             <?php echo get_the_post_thumbnail($post->ID, 'encabezadopost' , array('class' => 'img-responsive'))?>
              
         </div>
    </div>

    <section class="page-content single">
        <div class="container white">
            <div class="row about">
                <div class="col-md-6 throwback">
                  <a href="<?php echo get_page_link(6)?>">< Volver</a>
                </div>  
                <div class="col-md-6 throwtext">
                    <p>Caso  </p>
                </div>
                <div class="col-md-12 titlesingle">
                    <h2><?php echo $post->post_title?></h2>
                    <div></div>
                </div>  
               
                <div class="col-md-6">
                    <p><?php echo $post->post_excerpt?></p>
                </div>
                <div class="col-md-6">
                    <?php echo apply_filters('the_content' , $post->post_content)?>
                </div>
                <div class="col-md-6 share">
                    <ul>
                        <li>Compartir</li>
                        <li><a onclick="basicPopup(this.href);return false" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><span class="fa fa-facebook fa-fw"></span></a></li>
                        <li><a onclick="basicPopup(this.href);return false" target="_blank" href="http://twitter.com/share?text=<?php echo get_bloginfo('name')?>&nbsp;-&nbsp;<?php echo $post->post_title?>"><span class="fa fa-twitter fa-fw"></span></a></li>

                    </ul>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row bigcta">
                <div class="col-md-12">
                    <a href="<?php echo get_page_link(10)?>">Contáctate con Nosotros</a>
                         
                    <?php echo apply_filters('the_content' , $post->wp_count_posts)?>
                </div>  
            </div>
        </div>
    </section>
        
<?php get_footer()?>