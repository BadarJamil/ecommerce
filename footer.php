<?php
	<?php if( !( is_home() || is_front_page() ) ) { ?>
		</div>
	</div> 
	<?php } ?>

</div><!-- #content -->

	<?php do_action( 'ecommerce_before_footer' ); ?>
	
		<footer id="colophon" class="site-footer" role="contentinfo">

				<?php
					
					do_action( 'ecommerce_footer' ); 
				?>		
			
		</footer><!-- #colophon -->
		
	<?php do_action( 'storevilla_before_footer' ); ?>

    <a href="#" class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
