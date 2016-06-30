<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
			
			<footer id="site-footer" class="row" role="contentinfo">
				<div id="footer-inner">

				<div id="top-page-link"><a href="#">Top of page</a></div>

				<div class="row site-footer">

							<?php ild_header_menu('footer-one') ?>

							<?php ild_header_menu('footer-two') ?>

							<?php ild_header_menu('footer-three') ?>

							<?php ild_header_menu('footer-four') ?>


				</div>
				<div  class="site-footer">

					<div class="bottom-line">
						<ul>
							<li id="copyright"><?php bloginfo('name'); ?> &copy; <?php echo date("Y") ?></li>
							<li>website development: <a href="mailto:info@indigoleafdesign.co.uk">Indigo Leaf Design </a> </li>
						</ul>									
					</div>
				</div>	
				
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>