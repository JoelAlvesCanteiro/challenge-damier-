<html>
	<head>
		<link rel="stylesheet" href=<?php __DIR__;  ?>"/assets/bootstrap.min.css">
		<link rel="stylesheet" href=<?php __DIR__;  ?>"/assets/main.css">
	</head>
	<body>
		<h1 class="center">Damier</h1>
		<div class="container">
			<nav class="center">
				<h4><a href="/" id="home">Home</a></h4>
			</nav>
		</div>
		<div class="container">
			<div class="row center">
				<?php echo $content;  ?>
			</div>
		</div>
	</body>
</html>