<!DOCTYPE html>
<html>
	<?php include("_head.php") ?>
	<body>
		<!-- navbar-->
		<?php include("_navbar2.php") ?>
		<!--  Modal -->
		<?php include("_modal.php") ?>

		<section class="py-5">
		<div class="container py-5">
			<div class="row">
			<!-- Filter-->
			<div class="col-lg-3 order-2 order-lg-1">
				<h2 class="h3 mb-4 pb-1">Filter</h2>
				<form action="#">
				<div class="card border-0 shadow-sm mb-4 p-2">
					<div class="card-body">
					<h2 class="h5 mb-4">Choose category</h2>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck1" type="checkbox" checked>
						<label class="custom-control-label" for="customCheck1">Marketing</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck2" type="checkbox" checked>
						<label class="custom-control-label" for="customCheck2">Idea generation</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck3" type="checkbox">
						<label class="custom-control-label" for="customCheck3">Design</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck4" type="checkbox">
						<label class="custom-control-label" for="customCheck4">Naming</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck5" type="checkbox">
						<label class="custom-control-label" for="customCheck5">Domain names</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck6" type="checkbox">
						<label class="custom-control-label" for="customCheck6">Sales</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck7" type="checkbox">
						<label class="custom-control-label" for="customCheck7">Finance</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck8" type="checkbox">
						<label class="custom-control-label" for="customCheck8">Project management</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck9" type="checkbox">
						<label class="custom-control-label" for="customCheck9">Hosting</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck10" type="checkbox">
						<label class="custom-control-label" for="customCheck10">Forms & Surveys</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck11" type="checkbox">
						<label class="custom-control-label" for="customCheck11">Social tools</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck12" type="checkbox">
						<label class="custom-control-label" for="customCheck12">MVP</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck13" type="checkbox">
						<label class="custom-control-label" for="customCheck13">Early users</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheck14" type="checkbox">
						<label class="custom-control-label" for="customCheck14">Product demo</label>
					</div>
					</div>
				</div>
				<div class="card border-0 shadow-sm mb-4 p-2">
					<div class="card-body">
					<h2 class="h5 mb-4">Choose tag</h2>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheckbox1" type="checkbox">
						<label class="custom-control-label" for="customCheckbox1">Startup</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheckbox2" type="checkbox">
						<label class="custom-control-label" for="customCheckbox2">Development</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheckbox3" type="checkbox">
						<label class="custom-control-label" for="customCheckbox3">Management</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheckbox4" type="checkbox">
						<label class="custom-control-label" for="customCheckbox4">Resources</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheckbox5" type="checkbox">
						<label class="custom-control-label" for="customCheckbox5">Engagement</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheckbox6" type="checkbox">
						<label class="custom-control-label" for="customCheckbox6">Planning</label>
					</div>
					<div class="custom-control custom-checkbox mb-2">
						<input class="custom-control-input" id="customCheckbox7" type="checkbox">
						<label class="custom-control-label" for="customCheckbox7">Community</label>
					</div>
					</div>
				</div>
				<button class="btn btn-primary btn-block" type="submit"> <i class="fas fa-search mr-2 small"></i>Search</button>
				</form>
			</div>
			<!-- Listing-->
			<div class="col-lg-9 mb-5 mb-lg-0 order-1 order-lg-2">
				<!-- Listing sorting-->
				<div class="row mb-4 align-items-center">
				<div class="col-md-7">
					<ul class="list-inline mb-0">
					<li class="list-inline-item my-1 my-lg-0">
						<select class="selectpicker" name="sort" data-style="btn btn-light shadow-xs bg-white border" data-title="Sort By" data-width="180">
						<option value="alphapitcally">Alphapitcally</option>
						<option value="latest">Latest</option>
						<option value="top-rated">Top rated</option>
						<option value="random">Random</option>
						</select>
					</li>
					<li class="list-inline-item my-1 my-lg-0">
						<select class="selectpicker" name="type" data-style="btn btn-light shadow-xs bg-white border" data-width="180">
						<option value="tools">Tools</option>
						<option value="resources">Resources</option>
						</select>
					</li>
					</ul>
				</div>
				<div class="col-md-5 text-md-right">
					<p class="h6 mb-0 p-3 p-md-0">Show 8 results</p>
				</div>
				</div>
				<!-- Listing items-->
				<div class="row mb-4">
				<div class="col-lg-6 mb-4">
						<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
							<div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-1.png" alt="..." width="40"></div>
							<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
							<ul class="list-inline tool-rating mb-0">
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							</ul>
							<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/cat-tool-bg-1.jpg" alt="..."></div></a>
						<div class="card-body p-4">
							<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Curator</a></h3>
							<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
						</div>
				</div>
				<div class="col-lg-6 mb-4">
						<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
							<div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-2.png" alt="..." width="40"></div>
							<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
							<ul class="list-inline tool-rating mb-0">
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							</ul>
							<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/cat-tool-bg-2.jpg" alt="..."></div></a>
						<div class="card-body p-4">
							<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Elevatr</a></h3>
							<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
						</div>
				</div>
				<div class="col-lg-6 mb-4">
						<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
							<div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-3.png" alt="..." width="40"></div>
							<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
							<ul class="list-inline tool-rating mb-0">
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							</ul>
							<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/cat-tool-bg-3.jpg" alt="..."></div></a>
						<div class="card-body p-4">
							<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Germ.io</a></h3>
							<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
						</div>
				</div>
				<div class="col-lg-6 mb-4">
						<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
							<div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-4.jpg" alt="..." width="40"></div>
							<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
							<ul class="list-inline tool-rating mb-0">
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							</ul>
							<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/cat-tool-bg-4.jpg" alt="..."></div></a>
						<div class="card-body p-4">
							<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">MailChimp</a></h3>
							<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
						</div>
				</div>
				<div class="col-lg-6 mb-4">
						<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
							<div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-5.jpg" alt="..." width="40"></div>
							<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
							<ul class="list-inline tool-rating mb-0">
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							</ul>
							<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/cat-tool-bg-5.jpg" alt="..."></div></a>
						<div class="card-body p-4">
							<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">GrowthHackers</a></h3>
							<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
						</div>
				</div>
				<div class="col-lg-6 mb-4">
						<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
							<div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-6.png" alt="..." width="40"></div>
							<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
							<ul class="list-inline tool-rating mb-0">
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							</ul>
							<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/cat-tool-bg-6.jpg" alt="..."></div></a>
						<div class="card-body p-4">
							<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Revue</a></h3>
							<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
						</div>
				</div>
				<div class="col-lg-6 mb-4">
						<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
							<div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-7.png" alt="..." width="40"></div>
							<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
							<ul class="list-inline tool-rating mb-0">
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							</ul>
							<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/cat-tool-bg-7.jpg" alt="..."></div></a>
						<div class="card-body p-4">
							<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Sumo</a></h3>
							<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
						</div>
				</div>
				<div class="col-lg-6 mb-4">
						<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
							<div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-8.png" alt="..." width="40"></div>
							<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
							<ul class="list-inline tool-rating mb-0">
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
							</ul>
							<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/cat-tool-bg-8.jpg" alt="..."></div></a>
						<div class="card-body p-4">
							<h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Viral Loops</a></h3>
							<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
						</div>
				</div>
				</div>
				<!-- Pagination-->
				<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-end mb-0">
					<li class="page-item mx-1"><a class="page-link rounded border-0 shadow-sm px-3" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="page-item mx-1 active"><a class="page-link rounded border-0 shadow-sm px-3" href="#">1</a></li>
					<li class="page-item mx-1"><a class="page-link rounded border-0 shadow-sm px-3" href="#">2</a></li>
					<li class="page-item mx-1"><a class="page-link rounded border-0 shadow-sm px-3" href="#">3</a></li>
					<li class="page-item mx-1"><a class="page-link rounded border-0 shadow-sm px-3" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				</ul>
				</nav>
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