<!DOCTYPE html>
<html>
	<?php include("_head.php") ?>
	<body>
		<!-- navbar-->
		<?php include("_navbar2.php") ?>
		<!--  Modal -->
		<?php include("_modal.php") ?>
		
		<!-- Hero section-->
		<section class="hero-home py-5">
		<div class="container pt-5">
			<div class="row">
			<div class="col-lg-7 mx-auto text-center">
				<p class="h6 text-uppercase text-primary mb-3">Listings</p>
				<h1 class="mb-5">A curated directory of tools and resources to build your startup.</h1>
				<form class="p-2 rounded shadow-sm bg-white" action="#">
				<div class="input-group">
					<input class="form-control border-0 mr-2" type="search" placeholder="Search tools and resources...">
					<div class="input-group-append rounded">
					<button class="btn btn-primary rounded" type="submit"><i class="fas fa-search"></i></button>
					</div>
				</div>
				</form>
			</div>
			</div>
		</div>
		</section>
		<!-- Features section-->
		<section class="py-5">
		<div class="container py-5">
			<div class="row text-center">
			<div class="col-lg-10 mx-auto">
				<div class="card border-0 shadow">
				<div class="card-body p-5">
					<div class="row">
					<div class="col-lg-4 mb-4 mb-lg-0">
							<svg class="svg-icon mb-3 text-primary svg-icon-big">
							<use xlink:href="#list-details-1"> </use>
							</svg>
						<h2 class="h5">Search your tool</h2>
						<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					</div>
					<div class="col-lg-4 mb-4 mb-lg-0">
							<svg class="svg-icon mb-3 text-primary svg-icon-big">
							<use xlink:href="#survey-1"> </use>
							</svg>
						<h2 class="h5">Gather your info</h2>
						<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					</div>
					<div class="col-lg-4">
							<svg class="svg-icon mb-3 text-primary svg-icon-big">
							<use xlink:href="#stack-1"> </use>
							</svg>
						<h2 class="h5">Build your startup</h2>
						<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		</section>
		<!-- Essential tools-->
		<section class="pb-5">
		<div class="container pb-5">
			<header>
			<h2 class="h3 mb-1">Our essential tools</h2>
			<p class="text-muted text-small mb-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
			</header>
			<div class="row text-center align-items-stretch">
			<div class="col-lg-4 mb-4 mb-lg-0">
				<div class="card reset-anchor border-0 shadow h-100 hover-transition">
				<div class="card-body p-4 p-lg-5">
					<div class="essential-tool-img mb-4 mx-auto" style="background: url(<?=ASSETS?>distribution/img/tool-1.png)"></div>
					<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">HubSpot for startup</a></h3>
					<p class="text-small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				</div>
			</div>
			<div class="col-lg-4 mb-4 mb-lg-0">
				<div class="card reset-anchor border-0 shadow h-100 hover-transition">
				<div class="card-body p-4 p-lg-5">
					<div class="essential-tool-img mb-4 mx-auto" style="background: url(<?=ASSETS?>distribution/img/tool-2.png)"></div>
					<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Embroker stratup Program</a></h3>
					<p class="text-small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card reset-anchor border-0 shadow h-100 hover-transition">
				<div class="card-body p-4 p-lg-5">
					<div class="essential-tool-img mb-4 mx-auto" style="background: url(<?=ASSETS?>distribution/img/tool-3.png)"></div>
					<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Squadhelp</a></h3>
					<p class="text-small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				</div>
			</div>
			</div>
		</div>
		</section>
		<!-- Categories section-->
		<section class="pb-5">
		<div class="container pb-5">
			<header class="text-center mb-5">
			<h2 class="mb-1">Explore our categories</h2>
			<p class="text-muted text-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
			</header>
			<div class="row text-center">
			<div class="col-lg-3 px-lg-2">
				<div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
				<div class="card-body px-4 py-5">
						<svg class="svg-icon mb-3">
						<use xlink:href="#stack-1"> </use>
						</svg>
					<h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Marketing</a></h2>
					<p class="categories-item-number small mb-0">2 Items</p>
				</div>
				</div>
			</div>
			<div class="col-lg-3 px-lg-2">
				<div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
				<div class="card-body px-4 py-5">
						<svg class="svg-icon mb-3">
						<use xlink:href="#pie-chart-1"> </use>
						</svg>
					<h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Project management</a></h2>
					<p class="categories-item-number small mb-0">2 Items</p>
				</div>
				</div>
			</div>
			<div class="col-lg-3 px-lg-2">
				<div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
				<div class="card-body px-4 py-5">
						<svg class="svg-icon mb-3">
						<use xlink:href="#design-1"> </use>
						</svg>
					<h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Design</a></h2>
					<p class="categories-item-number small mb-0">2 Items</p>
				</div>
				</div>
			</div>
			<div class="col-lg-3 px-lg-2">
				<div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
				<div class="card-body px-4 py-5">
						<svg class="svg-icon mb-3">
						<use xlink:href="#mental-health-1"> </use>
						</svg>
					<h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Idea generation</a></h2>
					<p class="categories-item-number small mb-0">2 Items</p>
				</div>
				</div>
			</div>
			<div class="col-lg-3 px-lg-2">
				<div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
				<div class="card-body px-4 py-5">
						<svg class="svg-icon mb-3">
						<use xlink:href="#bookmark-1"> </use>
						</svg>
					<h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Naming</a></h2>
					<p class="categories-item-number small mb-0">2 Items</p>
				</div>
				</div>
			</div>
			<div class="col-lg-3 px-lg-2">
				<div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
				<div class="card-body px-4 py-5">
						<svg class="svg-icon mb-3">
						<use xlink:href="#checked-window-1"> </use>
						</svg>
					<h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Domain names</a></h2>
					<p class="categories-item-number small mb-0">2 Items</p>
				</div>
				</div>
			</div>
			<div class="col-lg-3 px-lg-2">
				<div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
				<div class="card-body px-4 py-5">
						<svg class="svg-icon mb-3">
						<use xlink:href="#list-details-1"> </use>
						</svg>
					<h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Hosting</a></h2>
					<p class="categories-item-number small mb-0">2 Items</p>
				</div>
				</div>
			</div>
			<div class="col-lg-3 px-lg-2">
				<div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
				<div class="card-body px-4 py-5">
						<svg class="svg-icon mb-3">
						<use xlink:href="#sales-up-1"> </use>
						</svg>
					<h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Market research</a></h2>
					<p class="categories-item-number small mb-0">2 Items</p>
				</div>
				</div>
			</div>
			<div class="col-lg-12 text-center pt-4"><a class="btn btn-primary" href="#">Show more categories</a></div>
			</div>
		</div>
		</section>
		<!-- Resources section-->
		<section class="pb-5">
		<div class="container pb-5">
			<header class="text-center mb-5">
			<h2 class="mb-1">Our Resources Collection</h2>
			<p class="text-muted text-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
			</header>
			<div class="row">
			<div class="col-lg-4 mb-4 mb-lg-0">
					<div class="card shadow border-0 reset-anchor d-block hover-transition"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-bg-1.jpg" alt="...">
					<div class="card-body p-4">
						<h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Quitting my corporate job</a></h3>
						<p class="text-muted text-small mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						<div class="media align-items-center"><img class="rounded-circle" src="<?=ASSETS?>distribution/img/author-4.png" alt="..." width="30">
						<div class="media-body d-flex ml-2 align-items-center"><span class="small text-muted mr-1">By</span>
							<h6 class="mb-0"> <a class="reset-anchor" href="#">Ali Mesee</a></h6>
						</div>
						</div>
					</div>
					</div>
			</div>
			<div class="col-lg-4 mb-4 mb-lg-0">
					<div class="card shadow border-0 reset-anchor d-block hover-transition"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-bg-2.jpg" alt="...">
					<div class="card-body p-4">
						<h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Writing a business plan</a></h3>
						<p class="text-muted text-small mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						<div class="media align-items-center"><img class="rounded-circle" src="<?=ASSETS?>distribution/img/author-5.png" alt="..." width="30">
						<div class="media-body d-flex ml-2 align-items-center"><span class="small text-muted mr-1">By</span>
							<h6 class="mb-0"> <a class="reset-anchor" href="#">Jason Doe</a></h6>
						</div>
						</div>
					</div>
					</div>
			</div>
			<div class="col-lg-4">
					<div class="card shadow border-0 reset-anchor d-block hover-transition"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-bg-3.jpg" alt="...">
					<div class="card-body p-4">
						<h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Postmortem of a VC-backed</a></h3>
						<p class="text-muted text-small mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						<div class="media align-items-center"><img class="rounded-circle" src="<?=ASSETS?>distribution/img/author-6.png" alt="..." width="30">
						<div class="media-body d-flex ml-2 align-items-center"><span class="small text-muted mr-1">By</span>
							<h6 class="mb-0"> <a class="reset-anchor" href="#">Richard Wood</a></h6>
						</div>
						</div>
					</div>
					</div>
			</div>
			<div class="col-lg-12 text-center pt-5"><a class="btn btn-primary" href="#">Show more resources</a></div>
			</div>
		</div>
		</section>
		<!-- Blog Section-->
		<section class="pb-5">
		<div class="container pb-5">
			<header class="text-center mb-5">
			<h2 class="mb-1">Explore our categories</h2>
			<p class="text-muted text-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
			</header>
			<div class="row">
			<div class="col-lg-4 mb-4 mb-lg-0">
					<div class="card border-0 shadow hover-transition"><a href="#"><img class="card-img-top img-fluid" src="<?=ASSETS?>distribution/img/blog-1.jpg" alt="..."></a>
					<div class="card-body p-5">
						<p class="text-small text-muted mb-2">11 February, 2020</p>
						<h3 class="h5"><a class="stretched-link reset-anchor" href="#">How To Get More Reviews For Your Startup Product</a></h3>
						<p class="text-small text-muted">The quality of customer service can make or break a buyer’s relationship with the seller. According to the 2017 Customer Service Barometer...</p><a class="btn btn-link p-0" href="#">Read more</a>
					</div>
					</div>
			</div>
			<div class="col-lg-4 mb-4 mb-lg-0">
					<div class="card border-0 shadow hover-transition"><a href="#"><img class="card-img-top img-fluid" src="<?=ASSETS?>distribution/img/blog-2.jpg" alt="..."></a>
					<div class="card-body p-5">
						<p class="text-small text-muted mb-2">11 February, 2020</p>
						<h3 class="h5"><a class="stretched-link reset-anchor" href="#">Increasing Engagement Among Email Subscribers</a></h3>
						<p class="text-small text-muted">The quality of customer service can make or break a buyer’s relationship with the seller. According to the 2017 Customer Service Barometer study published by...</p><a class="btn btn-link p-0" href="#">Read more</a>
					</div>
					</div>
			</div>
			<div class="col-lg-4">
					<div class="card border-0 shadow hover-transition"><a href="#"><img class="card-img-top img-fluid" src="<?=ASSETS?>distribution/img/blog-3.jpg" alt="..."></a>
					<div class="card-body p-5">
						<p class="text-small text-muted mb-2">11 February, 2020</p>
						<h3 class="h5"><a class="stretched-link reset-anchor" href="#">Lessons in Leadership: Q&amp;A with William Erbey</a></h3>
						<p class="text-small text-muted">The quality of customer service can make or break a buyer’s relationship with the seller. According to the 2017 Customer Service Barometer study published by...</p><a class="btn btn-link p-0" href="#">Read more</a>
					</div>
					</div>
			</div>
			</div>
		</div>
		</section>
		<!-- Newsletter section-->
		<section class="pb-5">
		<div class="container pb-5">
			<header class="text-center mb-5">
			<h2>Free tools to grow your startup</h2>
			</header>
			<div class="row">
			<div class="col-lg-7 mx-auto">
				<form class="p-2 rounded shadow-sm bg-white" action="#">
				<div class="input-group">
					<input class="form-control border-0 mr-2" type="email" placeholder="Enter your email address">
					<div class="input-group-append rounded">
					<button class="btn btn-primary rounded" type="submit">Get started today</button>
					</div>
				</div>
				</form>
			</div>
			</div>
		</div>
		</section>

		<!-- footer -->
		<?php include("_footer2.php") ?>
		
		<!-- JavaScript files-->
		<?php include("_js_files.php") ?>
		
	</body>
</html>