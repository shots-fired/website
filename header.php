<!DOCTYPE html>

<html lang="en">
	<head>
		<?php include('assets/resources.php'); ?>
	</head>
	<body>
		 <header>
			<div class="container">
				<a href="/" class="navbar-brand"><img class="navbar-logo" src="assets/img/logo_white.png"> </a>
				<nav class="navbar navbar-inverse navbar-right" role="navigation">
					<li><div class="dropdown text-center">
 						<button class="dropbtn" onclick="window.location='/'">HOME</button>
					</div></li>

					<li><div class="dropdown text-center">
 						<button class="dropbtn">MEDIA</button>
  							<div class="dropdown-content">
  								<a href="/blog">
  										Blog</a>	    							
    							<a href="/streams.php">
										Streams</a>
								<a href="https://www.youtube.com/channel/UCuhs4HbeDc6XEqaxg3Y_L1Q" target="_blank">
										YouTube</a>
  							</div>
					</div></li>

					<li><div class="dropdown text-center">
 						<button class="dropbtn">JOIN US</button>
  							<div class="dropdown-content">
    							<a href="/discord.php">Discord</a>
    							<a href="/minecraft.php">Minecraft</a>
  							</div>
					</div></li>

					<li><div class="dropdown text-center">
 						<button class="dropbtn" onclick="window.location='/about.php'">ABOUT</button>
					</div></li>



					<li><div class="dropdown text-center">
 						<button class="dropbtn" onclick="window.location='/contact.php'">CONTACT</button>
					</div></li>
				</nav>
			</div>
		</header>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
