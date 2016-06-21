
		<p><!-- Template Part for Module Styles. This is included in content-modules.php  --></p>




<!-- Notice with picture from file page-whatson in Magor -->		

		<div id="mod-notice" class="row style-module">

								<div class="col-sm-6">	
										<div class="single-note">
									
													<h2> Notice title </h2>

								<?php $upload_dir = wp_upload_dir(); ?>

								<?php $url = $upload_dir['baseurl'] . "/2016/05/image-alignment-150x150.jpg"; ?>

												<img class="cat-thmb" src="<?php echo $url; ?>"> 
												<p> Lorem ipsum dolor sit amet, test link adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. </p>

												<div class="clearfix"></div>

				     					</div>	
								</div>

								<div class="col-sm-6">	
									<div class="notice-board">	
									<h2>Notice Board</h2>

									</div>	
								</div>

		</div> <!--.row -->



		<!-- List Styles from Magor -->		

		<div id="mod-notice" class="row style-module">
				<div class="col-sm-6">	
					<div class="styled-list">	
						<h2>List of Links</h2>
									<ul >
										<li ><a href="<?php echo get_site_url(); ?>/news/another-general-post/">General Yoga</a></li>
								<li><a href="<?php echo get_site_url(); ?>/uncategorised/pregnancy-yoga/">Pregnancy Yoga</a></li>
								<li ><a href="<?php echo get_site_url(); ?>/uncategorised/mum-and-baby-yoga/">Mum and Baby Yoga</a></li>
								<li ><a href="<?php echo get_site_url(); ?>/uncategorised/one-to-one-tuition/">One to One Tuition</a></li>
								</ul>

								</div>	
				</div>

				<div class="col-sm-6">	
					<div class="sub-list">	
						<h2>Nested Links</h2>
							<ul >
								<li ><a href="<?php echo get_site_url(); ?>/news/another-general-post/">General Yoga</a>
									<ul>
										<li>List item 1</li>
										<li>List item 2</li>
									</ul>
								</li>
								<li><a href="<?php echo get_site_url(); ?>/uncategorised/pregnancy-yoga/">Pregnancy Yoga</a>
									<ul>
										<li>List item 1</li>
										<li>List item 2</li>
									</ul>
								</li>
							</ul>

								</div>	
				</div>


		</div> <!--.row -->











		 










	 




