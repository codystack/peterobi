    <header class="navbar-transparent navbar-dark navbar-sticky">
		
		<nav class="navbar navbar-expand-lg nav-dark">
			<div class="container-fluid">
				<!-- Logo -->
				<a class="navbar-brand" href="./">
					<img class="navbar-brand-item" src="assets/images/rnlogo.svg" alt="Logo">
				</a>
				<!-- Menu opener button -->
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Main Menu Start -->
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav navbar-nav-scroll navbar-nav-scroll ms-auto">
                        
						<li class="nav-item">
							<a class="nav-link <?php if($page=='Home'){echo 'active';}?>" href="./">Home</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link <?php if($page=='About'){echo 'active';}?>" href="about">About</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link" href="volunteer">Volunteer</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link" href="https://blog.rescuenigeriamovement.org">Blog</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link" href="contact">Contact</a>
						</li>
					</ul>
				</div>
                
				<div class="navbar-nav"> 
					<div class="nav-item border-0 d-none d-lg-inline-block align-self-center ps-5">
						<a href="https://donate.rescuenigeriamovement.org" class=" btn btn-grad text-white mb-0">DONATE NOW</a>
					</div>
				</div>
			</div>
		</nav>
        
	</header>