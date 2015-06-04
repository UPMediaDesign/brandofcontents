
  <footer class="bg-foot">
    <div class="container">
      <div class="row">
        <div class="col-md-12 logofooter">
            <a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-small.png" alt=""></a>
            <p>Eros id ullamcorper elementum, ex odio pharetra lorem.  <br/>
              Consectetur adipiscing elit. Etiam sodales</p>
        </div>
        <div class="contact-foot">
          <a href="<?php echo get_page_link(8)?>" title="Contáctanos" rel="help">Contáctanos</a>

        </div>
         <ul class="web-soc">
        <?php $redes = get_field('redes_sociales' , 'options')?>
            <?php foreach($redes as $red):?>
           
              <li>
                <a href="<?php echo $red['link_red']?>" target="_blank" rel="nofollow" title="<?php echo $red['nombre_red']?>"><img src="<?php echo $red['icono_red']?>" alt="" /></a>
              </li>
            
        <?php endforeach;?>
        </ul>

        <div class="col-md-12 credits">
          <p>THE BRAND OF CONTENT - <span>SANTA MARÍA 2800 - PROVIDENCIA - SANTIAGO - CHILE  - [56] 02 2315447</span> - <a href="mailto:contacto@thebrandofcontent.cl" target="_blank">CONTACTO@THEBRANDOFCONTENT.CL</a></p>
        </div>
      </div>
    </div>
  </footer>
</main>

<?php if(is_home()){?>
<script>
      var vid = document.getElementById('v0');
      vid.pause();
      window.onscroll = function() {
      	vid.currentTime = window.pageYOffset / 400;
      };

      jQuery(function() {
        jQuery('video').data('size', 'big');
      });

      jQuery(window).scroll(function() {
        if (jQuery(document).scrollTop() > 2010) {
          if (jQuery('video').data('size') == 'big') {
            jQuery('video').data('size', 'small');
      	  jQuery('header').css('background-color' , '#fff' );
          jQuery('header').css('transition', '0.5 ease');
      	 
      	 
          }
        } 
        
        else {
          if (jQuery('video').data('size') == 'small') {
            jQuery('video').data('size', 'big');
            jQuery('header').css({'background-color' : 'transparent' })
          }
        }
      });
</script>
<?php }?>

<script>
/*(function( $ ) {

	var $container = $('.masonry-container');
	$container.imagesLoaded( function () {
		$container.masonry({
			columnWidth: '.item',
			itemSelector: '.item'
		});
	});
	
	
	
})(jQuery);*/
</script>

</body>
<?php wp_footer()?>
</html>