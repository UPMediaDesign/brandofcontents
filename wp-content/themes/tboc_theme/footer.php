
<div class="container-fluid">
    <div class="row">
        <footer class="blue-footer">
            <div class="row">
            </div>
        </footer>
    </div>
</div>

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
  if (jQuery(document).scrollTop() > 4010) {
    if (jQuery('video').data('size') == 'big') {
      jQuery('video').data('size', 'small');
      jQuery('video').stop().animate('height', '370px');
	  jQuery('header').css('background-color' , '#fff' );
	 
	 
    }
  } 
  
  else {
    if (jQuery('video').data('size') == 'small') {
      jQuery('video').data('size', 'big');
      jQuery('video').stop().css('height', '100%');
	  jQuery('header').css({'background-color' : 'transparent' })
    }
  }
});


 jQuery('main').scrollToFixed( {
        top: 350,
        limit: $('main').offset().top,
    });

</script>

</body>
<?php wp_footer()?>
</html>