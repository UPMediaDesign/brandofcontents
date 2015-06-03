<?php
/*
Template Name: The Brand of Content
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

<div class="container main-container">

  <div class="row masonry-container">

    <div class="col-md-4 col-sm-6 item">
      <div class="thumbnail">
        <img src="http://lorempixel.com/200/200/abstract" alt="">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
        </div>
      </div>
    </div>
    <!--/.item  -->

    <div class="col-md-4 col-sm-6 item">
      <div class="thumbnail">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore
            enim quas.</p>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
        </div>
      </div>
    </div>
    <!--/.item  -->

    <div class="col-md-4 col-sm-6 item">
      <div class="thumbnail">
        <img src="http://lorempixel.com/200/200/abstract" alt="">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore
            enim quas.</p>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
        </div>
      </div>
    </div>
    <!--/.item  -->

    <div class="col-md-4 col-sm-6 item">
      <div class="thumbnail">
        <img src="http://lorempixel.com/200/200/abstract" alt="">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
        </div>
      </div>
    </div>
    <!--/.item  -->

    <div class="col-md-4 col-sm-6 item">
      <div class="thumbnail">
        <img src="http://lorempixel.com/200/200/abstract" alt="">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore
            enim quas.</p>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
        </div>
      </div>
    </div>
    <!--/.item  -->

    <div class="col-md-4 col-sm-6 item">
      <div class="thumbnail">
        <img src="http://lorempixel.com/200/200/abstract" alt="">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore
            enim quas.</p>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
        </div>
      </div>
    </div>

  </div>
  <!--/.masonry-container  -->

</div>
<!-- /.container -->

<section class="upper">
    <div class="container">
        <div class="row bigcta">

            <div class="col-md-12">
                <a href="<?php echo get_page_link(6)?>">Nuestra Experiencia</a>
            </div>  

        </div>
    </div>
</section>



<?php get_footer(); ?>