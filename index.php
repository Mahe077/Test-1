<?php
	include_once 'header.php';
?>

		<section class="index-banner">
			<div class="vertical-center">
				<?php
				if(isset($_SESSION['useruid'])){
					echo "<p>Hello there ".$_SESSION['useruid']."</p>";
				}
				?>
				<h2>I AM A FREELANCE WEB <br> DEVELOPER</h2>
				<h1>With specialty in back-end development, functionality,UX design, and Search Engine Optimization.</h1>
			</div>
		</section>
		<div class="wrapper">
			<section class="index-links">
				<a href="cases.html">
					<div class="index-boxlink-square">
						<h3>Cases</h3>
					</div>
				</a>
				<a href="#">
					<div class="index-boxlink-rectangle">
						<h3>mmtuts</h3>
					</div>
				</a>
				<a href="#">
					<div class="index-boxlink-square">
						<h3>Portfolio</h3>
					</div>
				</a>
				<a href="#">
					<div class="index-boxlink-rectangle">
						<h3>Youtube channel</h3>
					</div>
				</a>
				<a href="#">
					<div class="index-boxlink-square">
						<h3>About</h3>
					</div>
				</a>
				<a href="#">
					<div class="index-boxlink-square">
						<h3>Contact</h3>
					</div>
				</a>
			</section>
		</div>

			<?php
				include_once 'footer.php';
			?>
