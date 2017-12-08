<div class="header-container" data-structure="header-container">
	<header class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
		<div class="nav-bar l-constrained">

			<a class="logo" href="/" title="<?php bloginfo('name'); ?>" itemscope itemtype="http://schema.org/Organization">
				<svg id="logo" viewBox="0 0 200 100">
					<title><?php bloginfo('name'); ?></title>
					<rect class="logo-rectangle" width="100" height="100" />
					<circle class="logo-circle" cx="100" cy="50" r="50" />
					<rect x="114.6" y="14.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 8.5786 120.7107)" class="logo-diamond" width="70.7"
					height="70.7" />
				</svg>
			</a>


			<button id="nav-toggle" class="nav-toggle" aria-hidden="false" aria-expanded="false" aria-controls="nav" aria-label="Toggle Main Menu">
				<span class="menu-trigger-icon"></span>
			</button>
			
			<nav id="main-menu" class="nav-collapse" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<ul class="menu-items">
					<li>
						<a href="/">Home</a>
					</li>
					
					<li class="dropdown" aria-haspopup="true">
						<a href="index.html" class="has-dropdown">Products</a>
						<button class="dropdown-toggle" aria-expanded="false">
							<span class="visuallyhidden">Open sub menu</span>
						</button>
						<ul class="sub-menu">
							<li>
								<a href="index.html">Sub link</a>
							</li>
							<li>
								<a href="index.html">Sub link</a>
							</li>
						</ul>
					</li>

					<li class="dropdown" aria-haspopup="true">
						<a href="index.html" class="has-dropdown">Services</a>
						<button class="dropdown-toggle" aria-expanded="false">
							<span class="visuallyhidden">Open sub menu</span>
						</button>
						<ul class="sub-menu">
							<li>
								<a href="index.html">Sub link</a>
							</li>
							<li>
								<a href="index.html">Sub link</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="/">About Us</a>
					</li>

				</ul>

			</nav>
		</div>	

	</header>
</div>
