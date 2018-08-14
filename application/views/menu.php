<div class="menuBar">
	<nav class="navbar navbar-default ">
		<div class="container p0">
			<div class="navbar-header">
				<div class="logo">
					<a href="index.html" class="navbar-brand">
						<img src="<?php echo base_url().'assets/images/logo.jpeg'; ?>" alt="Homepage logo">
					</a>
				</div>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#navbar-menu">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>
			</div>
			<div class="navbar-right">

				<div id="navbar-menu" class="collapse navbar-collapse ">
					<ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="<?php echo (isset($active_accueil) ? $active_accueil : null) ;?>">
							<a href="<?php echo site_url("accueil");?>" class="about-us" title="Accueil">ACCUEIL</a>
						</li>	
						<li class="<?php echo (isset($active_evenement) ? $active_evenement : null );?>">
							<a href="<?php echo site_url("soumission");?>" class="about-us" title="Evenement">JSR18</a>
						</li>
						<li class="last <?php echo (isset($active_contact) ? $active_contact : null) ;?>">
							<a href="#" class="contact" title="Contact">CONTACT</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</nav>
</div>
