<!-- Template Part for Module Styles. This is included in content-modules.php  -->
		<!-- horizontal card from file page-about in Magor .each-group -->		

		<div id="mod-horiz-card" class="row style-module">
					<div class="horiz-card">

						<h3> Horizontal Card</h3>

				<?php $upload_dir = wp_upload_dir(); ?>
					
								<?php $url = $upload_dir['baseurl'] . "/2016/05/nicola-vogler-31.jpg"; ?>

								<div class="col-xs-4">
									<img class="card-thmb" src="<?php echo $url; ?>"> 
									<div class="clearfix"></div>
								</div>
								<div class="col-xs-8">
									<p>Lorem ipsum dolor sit amet, test link adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. </p>
								</div>

				     </div>	


		</div> <!--.row -->



				<!-- Vertical cards from file page-allchurches in Magor .each-group -->		

		<div id="mod-vert-card" class="row style-module">

			<h3> Vertical Cards with flex box</h3>

			<div class="flex-row">
					
								<?php $url = $upload_dir['baseurl'] . "/2016/05/nicola-vogler-31.jpg"; ?>

								 	<div class="vert-card">	

										<div class="card-head">	
											<h3> Title 1</h3>
										</div>

					     				<div class="flex-grow">
					     					<div class="flex-img-holder">
					     						<img class="card-thmb" src="<?php echo $url; ?>"> 
					     					</div>
											<p>Lorem ipsum dolor sit amet, test link adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. </p>											
										</div>

										<div class="card-footer">
									       		<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>" >
												 	<p>read more</p> 
												</a>
									    </div>
				     					
			     					</div>	<!-- end .vert-card flex col-->

			     					<?php $url = $upload_dir['baseurl'] . "/2016/05/nicola-vogler-29.jpg"; ?>

								 	<div class="vert-card">	

										<div class="card-head">	
											<h3> Title 2 </h3>
										
										</div>

					     				<div class="flex-grow">
					     					<div class="flex-img-holder">
					     						<img class="card-thmb" src="<?php echo $url; ?>"> 
					     					</div>
											<p>Lorem ipsum dolor sit amet, test link adipiscing elit. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. </p>											
										</div>

										 <div class="card-footer">
									       		<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>" >
												 	<p>read more</p> 
												</a>
									       </div>
				     					
			     					</div>	<!-- end .vert-card flex col-->

								 	<div class="vert-card">	

								 		<?php $url = $upload_dir['baseurl'] . "/2016/05/nicola-vogler-16b.jpg"; ?>

										<div class="card-head">		
											<h3> Title 3</h3>
											
										</div>


					     				<div class="flex-grow">
					     					<div class="flex-img-holder">
					     						<img class="card-thmb" src="<?php echo $url; ?>"> 
					     					</div>
					     					<div class="list-box">
										 		<h4>Sunday Services</h4>
										 		<ul>								 
										 			<li>First list item</li>
										 			<li>Second list item</li>
										 			<li>Third list item</li>
			     								</ul>
				     						</div>
											<p>Lorem ipsum dolor sit amet, test link adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus.  </p>
										</div>

										 <div class="card-footer">
									       		<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>" >
												 	<p>read more</p> 
												</a>
									       </div>
				     					
			     					</div>	<!-- end .vert-card flex col-->
															
			    </div>  <!--.flex-row -->
		</div> <!--.row -->
