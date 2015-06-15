<?php
/*
Template Name: The Brand of Contents
*/
?>
<?php get_header('content'); ?>

<div class="introcontent">
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1 single-container ">
                <h2><?php $cliente6 = get_post(4); echo $cliente6->post_title; ?></h2>
                <p><?php echo $cliente6->post_content; ?></p>
            </div>
                 
    
        </div>
    </div>
</div>

<div class="container-fluid main-container">

  <div class="row">

    <div class="col-md-6">
      <div class="row">

         <script>
    jQuery(document).ready(function($) {
    jQuery('.modal .close').on('click', function() {
        //$('#popup-youtube-player').stopVideo();
      jQuery('.modal .player')[0].contentWindow.postMessage('{"event":"command","func":"' +'stopVideo' + '","args":""}', '*');    
    });
    jQuery('.modal').on('click', function() {
        //$('#popup-youtube-player').stopVideo();
      jQuery('.modal .player')[0].contentWindow.postMessage('{"event":"command","func":"' +'stopVideo' + '","args":""}', '*');    
    });
    });
</script> 

        <?php $countrotativas = 0?>
        <?php $rotativas = get_field('rotativas')?>
        
        <?php foreach($rotativas as $rotativa):?>
        <?php $countrotativas++ ?>

        <?php if ($countrotativas == 1){?>

          <div class="col-md-12 col-sm-12 col-esp">
            <figure class="effect-layla insider" data-toggle="modal" data-target=".bs-example-modal-lg">
              <img src="<?php echo $rotativa['sizes']['big6'] ?>" class="img-responsive" alt="">
             
              <figcaption>
                <a data-toggle="modal" data-target="#modal-video" href=""><span class="fa fa-play fa-fw fa-2x"></span></a>
              </figcaption>
            </figure>

            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                <div class="modal-content embed-responsive embed-responsive-16by9" id="yt-player">
                 
                  <iframe width="560" height="315" class="embed-responsive-item player" src="https://www.youtube.com/embed/<?php echo get_field('initial_embed')?>?rel=0&showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>

                  
                </div>
              </div>
            </div>

          </div>
        
        <?php }

        elseif ($countrotativas == 3 || $countrotativas == 4){?>

          <div class="col-md-6 col-sm-12 col-esp">
            <img src="<?php echo $rotativa['sizes']['small300'] ?>" class="img-responsive" alt="">
          </div>

        <?php }

        elseif ($countrotativas == 2 ){?>
           <div class="col-md-6 col-sm-12 col-esp">
            <img src="<?php echo $rotativa['sizes']['big300'] ?>" class="img-responsive" alt="">
          </div>
        <?php }

        else {?>
          <div class="col-md-12 col-sm-12 col-esp">
            <img src="<?php echo $rotativa['sizes']['big6'] ?>" class="img-responsive" alt="">
          </div>
        <?php } 

        ?>

        <?php endforeach;?>



      </div>
    </div>

    <div class="col-md-6 formula">
      <div class="row">
        <h2>La Fórmula</h2>

        <?php $countformulas = 0?>
        <?php $formulas = get_field('formulas')?>
        
        <?php foreach($formulas as $formula):?>
        <?php $countformulas++ ?>

        <?php if ($countformulas%2==0){
          $fclass = 'lefted';
        }

        else {
          $fclass = 'righted';
        } 

        ?>
            <div class="col-md-12 col-sm-12 <?php echo $fclass?>">
              <span><?php echo '0'.$countformulas ?></span>
              <h3><?php echo $formula['titulo_de_formula']?></h3>
              <p><?php echo $formula['contenido_formula'] ?></p>
            </div>
        <?php endforeach;?>

      </div>
    </div>

  </div>
  <!--/.row  -->
</div>
<!-- /.container -->

<section>
    <div class="container">
        <div class="row bigcta">

            <div class="col-md-12">
                <a href="<?php echo get_page_link(6)?>">Nuestra Experiencia</a>
            </div>  

        </div>
    </div>
</section>



<?php get_footer(); ?>