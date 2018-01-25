<!DOCTYPE html>

<html lang="en">
	<head>
		<?php include('assets/resources.php'); ?>
	</head>
	<body>
	 	<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="/" class="navbar-brand"><img class="navbar-logo" src="assets/img/logo_white.png"> </a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headerNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
			        </button>					
				</div>
				<div class="collapse navbar-collapse" id="headerNavbar">
					<u1 class="nav navbar-nav navbar-right">
						<li><div class="dropdown text-center">
	 						<button class="dropbtn" onclick="window.location='/'">HOME</button>
						</div></li>

						<li><div class="dropdown text-center">
	 						<button class="dropbtn">MEDIA</button>
	  							<div class="dropdown-content">
	  								<a href="/blog">Blog</a>
	    							<a href="/streams.php">Streams</a>
									<a href="https://www.youtube.com/channel/UCuhs4HbeDc6XEqaxg3Y_L1Q" target="_blank">YouTube</a>
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
					</u1>
				</div>
			</div>
		</nav>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
