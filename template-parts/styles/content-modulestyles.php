
<article id="modulestyles" class="post type-post styles-post">


<p><!-- Template Part for Module Styles. This is included in content-modules.php  --></p>

	<div id="module-styles1" class="entry-content">

<!-- Header -->		

		<div id="mod-header" class="row style-module">

			<header class="entry-header">
				<h1 class="entry-title">Here is a Page Header</h1>  	
			</header>

			<!--	<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?> </h1>  	
			</header> -->

		</div> <!--.row -->


<!-- Notice with picture from file page-whatson in Magor -->		

		<div id="mod-notice" class="row style-module">

								<div class="col-sm-6">	
										<div class="single-note">
									
													<h2> Notice title </h2>
											
												<?php $url = 
												"http://localhost:8888/niks-yoga/wp-content/uploads/2013/03/image-alignment-150x150.jpg"; ?>

												<img class="cat-thmb" src="<?php echo $url; ?>"> 
												<div><p> Lorem ipsum dolor sit amet, test link adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. </p></div> 

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
					<div class="magor-list styled-list">	
						<h2>List of Links</h2>
									<ul >
										<li ><a href="http://localhost:8888/niks-yoga/news/another-general-post/">General Yoga</a></li>
								<li><a href="http://localhost:8888/niks-yoga/uncategorised/pregnancy-yoga/">Pregnancy Yoga</a></li>
								<li ><a href="http://localhost:8888/niks-yoga/uncategorised/mum-and-baby-yoga/">Mum and Baby Yoga</a></li>
								<li ><a href="http://localhost:8888/niks-yoga/uncategorised/one-to-one-tuition/">One to One Tuition</a></li>
								</ul>

								</div>	
				</div>

				<div class="col-sm-6">	
					<div class="magor-list sub-list">	
						<h2>Nested Links</h2>
							<ul >
								<li ><a href="http://localhost:8888/niks-yoga/news/another-general-post/">General Yoga</a>
									<ul><li>List item 1</li></ul>
									<ul><li>List item 2</li></ul>
								</li>
								<li><a href="http://localhost:8888/niks-yoga/uncategorised/pregnancy-yoga/">Pregnancy Yoga</a></li>
									<ul><li>List item 1</li></ul>
									<ul><li>List item 2</li></ul>
								</ul>

								</div>	
				</div>


		</div> <!--.row -->

				<div id="mod-nav" class="row style-module">

			<h3>Example Main Navigation</h3>

		<nav id="magor-style" class="navbar navbar-default" role="navigation">


			<div class="navbar-header">
								
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
					<div id="menu-btn-left">
						<h2>Menu</h2>
					</div>
					<div id="menu-btn-right">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</div>
				</button>
			</div>

							
							<div class="collapse navbar-collapse navbar-primary-collapse">
								<ul id="menu-primary" class="nav navbar-nav"><li id="menu-item-1713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1713"><a href="http://localhost:8888/niks-yoga/">Welcome</a></li>
<li id="menu-item-1710" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1710"><a href="http://localhost:8888/niks-yoga/events/">Events</a></li>
<li id="menu-item-1709" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1705 current_page_item menu-item-1709 active active"><a href="http://localhost:8888/niks-yoga/style-modules/">Style Modules</a></li>
<li id="menu-item-1712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1712"><a href="http://localhost:8888/niks-yoga/website-styles/">Website Styles</a></li>
<li id="menu-item-1711" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1711"><a href="http://localhost:8888/niks-yoga/contact/">Contact</a></li>
</ul> 
								 
							</div><!--.navbar-collapse-->
			</nav>

		</div><!-- .row -->



		<!-- horizontal card from file page-about in Magor .each-group -->		

		<div id="mod-horiz-card" class="row style-module">
					<div class="horiz-card">

						<h3> Horizontal Card</h3>
						
								<?php $url = 
								"http://localhost:8888/niks-yoga/wp-content/uploads/2013/03/image-alignment-300x200.jpg"; ?>

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

		<div id="mod-vert-card" class="row  style-module">

						<h3> Vertical Cards with flex box</h3>
						

								<?php $url = $upload_dir['baseurl'] . "/2016/05/image-alignment-300x200.jpg"; ?>

								<div class="col-sm-4">
								 		<div class="vert-card flex-col">	

										<div>	
											<h3> Title 1</h3>
											<img class="card-thmb" src="<?php echo $url; ?>"> 
										</div>

									 	<div id="service-summary">
									 		<h4>Sunday Services</h4>
									 		<ul class="service-times">								 
									 			<li>First list item</li>
									 			<li>Second list item</li>
									 			<li>Third list item</li>
		     								</ul>
				     					</div>
					     				<div class="flex-grow">
										<p>Lorem ipsum dolor sit amet, test link adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. </p>
										</div>

										  <div>
									       		<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>" >
												 	<p>read more</p> 
												</a>
									       </div>
				     					
			     					</div>	<!-- end .vert-card flex col-->
								</div>

								<div class="col-sm-4">
								 	<div class="vert-card flex-col">	

										<div>	
											<h3> Title 2 </h3>
											<img class="card-thmb" src="<?php echo $url; ?>"> 
										</div>

					     				<div class="flex-grow">
										<p>Lorem ipsum dolor sit amet, test link adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Lorem ipsum dolor sit amet, test link adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl </p>
										</div>

										  <div>
									       		<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>" >
												 	<p>read more</p> 
												</a>
									       </div>
				     					
			     					</div>	<!-- end .vert-card flex col-->
								</div>

								<div class="col-sm-4">
								 	<div class="vert-card flex-col">	

										<div>	
											<h3> Title 3</h3>
											<img class="card-thmb" src="<?php echo $url; ?>"> 
										</div>

									 	<div id="service-summary">
									 		<h4>Sunday Services</h4>
									 		<ul class="service-times">								 
									 			<li>First list item</li>
									 			<li>Second list item</li>
									 			<li>Third list item</li>
		     								</ul>
				     					</div>
					     				<div class="flex-grow">
										<p>Lorem ipsum dolor sit amet, test link adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus.  </p>
										</div>

										  <div>
									       		<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>" >
												 	<p>read more</p> 
												</a>
									       </div>
				     					
			     					</div>	<!-- end .vert-card flex col-->
								</div>																

		</div> <!--.row -->






	</div><!-- .entry-content -->
		 

</article>








	 




