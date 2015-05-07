<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'backend/DB_CN.php';
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Шилэн Нам</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Css -->
	<link rel="stylesheet" href="css/global.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<header>
		<?php
			include "templates/header.php";
		?>
	</header>

	
	<!-- Party detailed information goes here! -->
	<div class="container" id="party">
		
		<div class="row">
			<!-- Party logo goes here -->
			<div class="col-md-6">
				<div class="party_logo">
					<img src="res/party/logos/AN_logo.png" alt="AN">
				</div>
			</div>

			<!-- Party short description goes here -->
			<div class="col-md-6">
				<div class="party_short_desc">
					<h1>
						Ардчилсан нам <small>(АН)</small>
					</h1>
					<h2>
						Намын дарга: 
					</h2>
					<h4>
						<a href="">www.demparty.mn</a>
					</h4>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#detailedInfo" data-toggle="collapse" class="btn btn-info">Дэлгэрэнгүй мэдээлэл харах</a>
			</div>
		</div>
		<div class="row collapse in" id="detailedInfo">
			<!-- Party social information goes here -->
			<div class="col-md-6">
				<div class="party_social">
					<table class="table">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo minima commodi, doloremque, sit, eum, esse porro doloribus vitae libero dolorem. Dignissimos quis tempora in corporis laboriosam et, sed non?
					</table>
				</div>
			</div>

			<!-- Party founding information and law related goes here -->
			<div class="col-md-6">
				<div class="party-founding">
					<table class="table">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates autem consectetur et aut facere at laudantium similique hic mollitia, ullam quibusdam. Architecto sequi nesciunt esse id necessitatibus, eaque aperiam reiciendis?
					</table>
				</div>
			</div>
		</div>

	</div>




	<footer class="footer navbar navbar-fixed-bottom">
		<?php
			include "templates/footer.php";
		?>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.2.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Global Javascript and Jquery -->
	<script src="js/global.js"></script>
</body>
</html>