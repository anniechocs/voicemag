<!-- Template Part for Module Styles. This is included in content-modules.php  -->
		<!-- Featured image -->		


		<div id="mod-featured" class="row style-module">
				<h2>Featured Image</h2>

								<div class="col-sm-9">	
								<?php $upload_dir = wp_upload_dir(); ?>
								<?php $url = $upload_dir['baseurl'] . "/2016/05/yoga-1-480-filter.jpg"; ?>

												<img class="featured-img" src="<?php echo $url; ?>"> 

								</div>


		</div> <!--.row -->