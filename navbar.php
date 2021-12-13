<?php

function _navbar($title, $active)
{

?>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg">
		<!-- Logo -->
		<div class="logo-wrapper valign">
			<div class="logo">
				<a href="index.php">
					<img src="img/logo.png" class="logo-img" alt="">
					<h2>BAUEN<span>INNOVATE DESIGN</span></h2>
				</a>
			</div>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				
				<?php
				if ($title == 'Home') {
				?>
					<li class="nav-item"><a class="nav-link <?php echo $active ?>" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
					<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				<?php
				} else if ($title == 'About') {
				?>
					<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link <?php echo $active ?>" href="about.php">About</a></li>
					<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				<?php

				} else if ($title == 'Services') {
				?>
					<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
					<li class="nav-item"><a class="nav-link <?php echo $active ?>" href="services.php">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				<?php

				} else if ($title == 'Contact') {
				?>
					<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
					<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
					<li class="nav-item"><a class="nav-link <?php echo $active ?>" href="contact.php">Contact</a></li>
				<?php
				}
				?>


			</ul>
		</div>
	</nav>

<?php
}
?>