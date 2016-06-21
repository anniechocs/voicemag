<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
			
			<footer id="site-footer" class="row" role="contentinfo">
				<div id="footer-row" class="site-footer">
					<div id="mma-copyright">
						<h3><?php bloginfo('name'); ?> &copy; <?php echo date("Y") ?></h3>
					</div>

					<div class="col-md-6 footer-left">
						<?php dynamic_sidebar('footer-left'); ?> 
					</div>
					<div class="col-md-6 footer-right text-right">
						<?php dynamic_sidebar('footer-right'); ?> 
						<div id="top-page-link"><a href="#">Top of page</a></div>
					<div class="clearfix"></div>
					</div>
					<div id="dev-by">
						<p>website development: <a href="mailto:info@indigoleafdesign.co.uk"> info@indigoleafdesign.co.uk </a> </p>
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>