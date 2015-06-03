<?php
/*
Template Name: Contacto
*/
?>
<?php get_header('contact'); ?>

<section class="contact-base">
	<div class="container">
		<div class="row">
			<div class="clear separator"></div>
			<div class="col-md-5 col-md-offset-1 control">
				<h2>Contacto</h2>
				<?php echo do_shortcode('[contact-form-7 id="32" title="Contacto"]')?>
			</div>
			<div class="col-md-5 address">

				<span class="firstspan">The Brand of Content</span><br/>
				<span class="secondspan">Santa María 2800<br/>
				Providencia<br/> 
				Santiago, Chile <br/> 
				[56] 02 2315447</span><br/> 
				<a href="mailto:contacto@thebrandofcontent.cl" target="_blank">contacto@thebrandofcontent.cl</a>
			</div>
		</div>
	</div>
</section>

</main>
</body>
<?php wp_footer()?>
</html>
