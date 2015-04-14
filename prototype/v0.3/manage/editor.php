<!DOCTYPE html>
<html>
<head>
	<?php
		include '../backend/init.php';
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Шилэн Нам</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Css -->
	<link rel="stylesheet" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/manage.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../js/jquery-1.11.2.min.js"></script>
	<!-- AngularJs minified version js file -->
	<script src="../js/angular.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Custom Global Javascript and Jquery -->
	<script src="../js/global.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top navbar-md">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="../">Shilen Nam</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Databases <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="diagrams.php">Diagrams</a></li>
	            <li class="active"><a href="editor.php">Table editor</a></li>
	            <li><a href="viewer.php">Data viewer</a></li>
	            <li><a href="priviligies.php">User priviligies</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<header class="header">
			<h1 class="text-center">Data Viewer</h1>
		</header>
		<hr>
		<div class="col-md-12">
			<div class="col-md-2">
				<ul class="list-group">
					<a href="index.php" class="list-group-item">
						<span class="glyphicon glyphicon-book"></span> Instructions
					</a>
					<a href="diagrams.php" class="list-group-item">
						<span class="glyphicon glyphicon-list-alt"></span> Diagrams
					</a>
					<a href="editor.php" class="list-group-item active">
						<span class="glyphicon glyphicon-pencil"></span> Table Editor
					</a>
					<a href="viewer.php" class="list-group-item">
						<span class="glyphicon glyphicon-file"></span> Data Viewer
					</a>
					<a href="priviligies.php" class="list-group-item disabled">
						<span class="glyphicon glyphicon-user"></span> User Priviligies
					</a>
				</ul>
			</div>
			<div class="col-md-10">
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselect="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="panel-party-heading">
							<h4 class="panel-title">
							<a href="#panel-party-collapse" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-control="panel-party-collapse">
								Party
							</a>
							</h4>
						</div>
						<div id="panel-party-collapse" class="panel-collapse collapse-in" role="tabpanel" aria-labelledby="panel-party-heading">
							<div class="panel-body">
								<ul class="nav nav-tabs nav-justified">	
									<li role="presentation" class="active">
										<a href="#edit_party" data-toggle="tab">Edit Record</a>
									</li>
									<li role="presentation">
										<a href="#insert_party" data-toggle="tab">Add New Record</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="edit_party" class="tab-pane fade in active">
										<?php
											$db = new DB();
											$db->query("select id, code, title, acronym from party");
											$rows = $db->resultset();
										?>
										<h4 class="text-danger text-center">
											<span class="glyphicon glyphicon-warning-sign"></span> Be sure to verify the data that you are editing!
										</h4>
										<div class="table-responsive">
											<table class="table table-striped">
												<tr>
													<th>Code</th>
													<th>Title</th>
													<th>Acronym</th>
													<th></th>
												</tr>
												<?php
													foreach ($rows as $row) {
														echo "<tr>";
														echo "<td>".$row['code']."</td>";
														echo "<td>".$row['title']."</td>";
														echo "<td>".$row['acronym']."</td>";
														echo "<td class='text-center'>
														<button type='button' id='edit_".$row['id']."' class='btn btn-default' data-target='#edit_modal' data-toggle='modal'>
														<span class='glyphicon glyphicon-pencil'></span>
														</button>
														<button type='button' class='btn btn-default'>
														<span class='glyphicon glyphicon-trash'></span>
														</button>
														</td>";
														echo "</tr>";
													}
												?>
											</table>
										</div>
									</div>
									<div id="insert_party" class="tab-pane fade in">
										<h4 class="text-info">
											Be sure to check your credentials before you submit data
										</h4>
										<form action="../backend/management_operator/data_add.php" method="post">
											<div class="form-group">
												<label for="party-code">Code : </label>
												<input type="text" class="form-control" id="party-code" name="party-code">
											</div>
											<div class="form-group">
												<label for="party-title">Title : </label>
												<input type="text" class="form-control" id="party-title" name="party-title">
											</div>
											<div class="form-group">
												<label for="party-acronym">Acronym</label>
												<input type="text" class="form-control" id="party-title"
												name="party-acronym">
											</div>
											<div class="form-group">
												<input type="submit" class="btn btn-primary" value="Add" name="party-add">
												<input type="reset" class="btn btn-default" value="Clear">
											</div>
										</form>
									</div>

									
									<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									   	  <form action="">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										        <h4 class="modal-title" id="myModalLabel">Edit Record</h4>
										      </div>
										      <div class="modal-body" id="edit_output">
										       	<div class="form-group">
										       		<label for="edit_party_code">Code : </label>
										       		<input type="text" id="edit_party_code" class="form-control" disabled><br>
										       		<input type="text" name="edit_party_code" class="form-control" placeholder="New Value">
										       	</div>
										       	<hr>
										       	<div class="form-group">
										       		<label for="edit_party_title">Title : </label>
										       		<input type="text" id="edit_party_code" class="form-control" disabled><br>
										       		<input type="text" name="edit_party_title" class="form-control" placeholder="New Value">
										       	</div>
										       	<hr>
										       	<div class="form-group">
										       		<label for="edit_party_acronym">Acronym : </label>
										       		<input type="text" name="edit_party_acronym" class="form-control" disabled><br>
										       		<input type="text" name="edit_party_acronym" class="form-control" placeholder="New Value">
										       	</div>
										       	<div id="editor_test">
										       		
										       	</div>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										        <input type="submit" class="btn btn-primary" value="Save Changes">
										      </div>
									      </form>
									    </div>
									  </div>
									</div>


								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>