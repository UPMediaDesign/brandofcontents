<?php
/*
Template Name: Clientes | Casos
*/
?>
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

<div class="container-fluid main-container">

  <div class="row masonry-container">



    <!-- Columnas Casos | Clientes  -->
   
      <?php $countmazclientes = 0 ?>
      <?php foreach ($posts as $mazcliente): ?>
      <?php $countmazclientes++ ?>

        <?php if ($countmazclientes == 1 || $countmazclientes == 2 || $countmazclientes == 4){
          $msize = 'big6';
          $mclass = 'col-md-6 col-sm-6 col-esp item';
        }

        elseif ($countmazclientes == 5 || $countmazclientes == 6){
          $msize = 'small300';
          $mclass = 'col-md-3 col-sm-6 col-esp item';
        }

        elseif ($countmazclientes == 3 ){
          $msize = 'big300';
          $mclass = 'col-md-3 col-sm-6 col-esp item';
        }

        elseif ($countmazclientes == 7 || $countmazclientes == 8 ){
          $msize = 'big6';
          $mclass = 'col-md-6 col-sm-6 col-esp item';
        }

        else {
          $msize = 'big6';
          $mclass = 'col-md-6 col-sm-6 col-esp item';
        } 

        ?>

        <figure class="<?php echo $mclass ?> effect-oscar">
          <a href="<?php echo get_permalink($mazcliente->ID)?>"><?php echo get_the_post_thumbnail( $mazcliente->ID , $msize, array('class' => 'img-responsive')) ?></a>
              
            <figcaption>
              <div class="fig-content">
                  <h3>
                    <a href="<?php echo get_permalink($mazcliente->ID) ?>" title="<?php echo $mazcliente->post_title ?>" rel="blog"><?php echo $mazcliente->post_title ?></a>
                  </h3>
                  <p><?php echo substr($mazcliente->post_content , 0 , 62 )?>...</p>
                  <a class="btx" href="<?php echo get_permalink($cliente->ID) ?>" title="<?php echo $cliente->post_title ?>" rel="blog">Ver más</a>
              </div>
            </figcaption>
          </figure>
                          
          <?php endforeach ?>

  </div>
  <!--/.masonry-container  -->

</div>
<!-- /.container -->

<section>
    <div class="container">
        <div class="row bigcta">

            <div class="col-md-12">
                <a href="<?php echo get_page_link(4)?>">Nuestra Experiencia</a>
            </div>  

        </div>
    </div>
</section>



<?php get_footer(); ?>