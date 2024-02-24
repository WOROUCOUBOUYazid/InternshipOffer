<header class="header">
	<div class="container">
		<div class="header-main">
			<div class="logo">
				<a href="#">Logo</a>
			</div>
			<div class="open-nav-menu">
				<span></span>
			</div>
			<div class="menu-overlay"></div>
			<!-- navigation menu start -->
			<nav class="nav-menu">
				<div class="close-nav-menu">
					<img src="img/close.svg" alt="close">
				</div>
					<ul class="menu">
					<li class="menu-item">
						<a href="#" data-toggle="sub-menu">Accueil</a>
					</li>
					<li class="menu-item">
						<a href="#">A Propos</a>
					</li>
					<li class="menu-item">
							<a href="<?=HOST?>login">Se connecter</a>
						</li>
					<li class="menu-item menu-item-has-children">
						<a href="#" data-toggle="sub-menu">S'inscrire<i class="plus"></i></a>
						<ul class="sub-menu">
							<li class="menu-item"><a href="<?=HOST?>studentRegister">En tant qu'étudiant</a></li>
							<li class="menu-item"><a href="<?=HOST?>companyRegister">En tant qu'entreprise</a></li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="#">Contact</a>
					</li>
				</ul>
			</nav>
			<!-- navigation menu end -->
		</div>
	</div>
</header>